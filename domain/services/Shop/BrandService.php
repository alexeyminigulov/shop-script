<?php

namespace domain\services\Shop;

use domain\entities\Shop\Brand;
use domain\forms\Shop\BrandForm;
use domain\repositories\Shop\BrandRepository;

class BrandService
{
    private $repository;

    public function __construct(BrandRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(BrandForm $form): Brand
    {
        $brand = Brand::create($form->name, $form->slug);

        $this->repository->save($brand);

        return $brand;
    }

    public function update(BrandForm $form): Brand
    {
        $brand = $this->repository->find($form->id);
        $brand->edit($form->name, $form->slug);

        $this->repository->save($brand);

        return $brand;
    }

    public function delete($id)
    {
        $brand = $this->repository->find($id);
        $this->repository->delete($brand);
    }
}