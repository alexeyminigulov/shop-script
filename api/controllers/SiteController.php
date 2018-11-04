<?php
namespace api\controllers;

use Yii;
use yii\web\Controller;

/**
 * @SWG\Swagger(
 *     basePath="/",
 *     host="api.shopscript.dev",
 *     schemes={"http"},
 *     produces={"application/json","application/xml"},
 *     consumes={"application/json","application/xml","application/x-www-form-urlencoded"},
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Shop-Script API",
 *         description="HTTP JSON API",
 *     ),
 *     @SWG\SecurityScheme(
 *         securityDefinition="OAuth2",
 *         type="oauth2",
 *         flow="password",
 *         tokenUrl="http://api.shopscript.dev/oauth2/token"
 *     ),
 *     @SWG\SecurityScheme(
 *         securityDefinition="Bearer",
 *         type="apiKey",
 *         name="Authorization",
 *         in="header"
 *     ),
 *     @SWG\Definition(
 *         definition="ErrorModel",
 *         type="object",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */

class SiteController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/",
     *     tags={"Info"},
     *     @SWG\Response(
     *         response="200",
     *         description="API version",
     *         @SWG\Schema(
     *             type="object",
     *             @SWG\Property(property="version", type="string")
     *         ),
     *     )
     * )
     */
    public function actionIndex()
    {
        return ['version' => '1.0.0'];
    }
}
