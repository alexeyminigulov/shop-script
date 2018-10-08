<?php
namespace domain\entities\User;

use Yii;
use yii\db\ActiveRecord;
use domain\entities\Shop\Order;
use domain\entities\Shop\WishItem;
use domain\entities\User\events\UserConfirmEmail;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\web\IdentityInterface;
use lhs\Yii2SaveRelationsBehavior\SaveRelationsBehavior;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 *
 * @property Order[] $orders
 * @property WishItem[] $wishItems
 */
class User extends ActiveRecord implements IdentityInterface, UserEventInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    use UserEventsTrait;

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            [
                'class' => SaveRelationsBehavior::className(),
                'relations' => ['wishItems'],
            ],
        ];
    }

    public static function create($userName, $email, $password): self
    {
        $user = new self();
        $user->username = $userName;
        $user->email = $email;
        $user->setPassword($password);
        $user->generateAuthKey();
        $user->addEvent(new UserConfirmEmail($user));

        return $user;
    }

    public function edit($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function addWishItem(WishItem $wishItem)
    {
        $wishItems = $this->wishItems;
        $wishItems[] = $wishItem;
        $this->wishItems = $wishItems;
    }

    public function eraseWishItem(WishItem $wishItem)
    {
        $wishItems = $this->wishItems;
        for ($i = 0; $i < count($wishItems); $i++) {
            if ($wishItems[$i]->id == $wishItem->id) {
                unset($wishItems[$i]);
                continue;
            }
        }
        $this->wishItems = $wishItems;
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by name
     *
     * @param string $name
     * @return static|null
     */
    public static function findByName($name)
    {
        return static::findOne(['username' => $name, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by email
     *
     * @param string $email
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return static::findOne([ 'email' => $email, 'status' => User::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     *  ========================== Relation ===========================
     */

    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['user_id' => 'id']);
    }

    public function getWishItems()
    {
        return $this->hasMany(WishItem::className(), ['user_id' => 'id']);
    }
}
