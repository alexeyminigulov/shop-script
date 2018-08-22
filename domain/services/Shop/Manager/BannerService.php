<?php

namespace domain\services\Shop\Manager;

use domain\entities\Shop\Manager\Banner;
use domain\forms\Shop\Manager\BannerForm;
use domain\repositories\Shop\Manager\BannerRepository;

class BannerService
{
    private $repository;

    public function __construct(BannerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(BannerForm $form): Banner
    {
        $banner = Banner::create($form->name, $form->title, $form->description, $form->btnTitle, $form->btnUrl, $form->image, $form->backgroundImg);

        $this->repository->save($banner);

        return $banner;
    }

    public function update(BannerForm $form): Banner
    {
        $banner = $this->repository->find($form->id);
        $banner->edit($form->name, $form->title, $form->description, $form->btnTitle, $form->btnUrl, $form->image, $form->backgroundImg);
        $this->repository->save($banner);

        return $banner;
    }

    public function delete($id)
    {
        $banner = $this->repository->find($id);
        $this->repository->delete($banner);
    }
}