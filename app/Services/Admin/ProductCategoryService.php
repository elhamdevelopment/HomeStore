<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/12/2019
 * Time: 10:42 PM
 */

namespace EasyShop\Services\Admin;


use EasyShop\Models\ProductCategory;
use EasyShop\Models\productCategoryCategory;
use EasyShop\Repository\Repository;

class productCategoryService
{
    protected $productCategory;

    public function __construct(ProductCategory $productCategory)
    {
        $this->productCategory = new Repository($productCategory);
    }

    public function Create(array $data)
    {
        $this->productCategory->create($data);
        $this->productCategory->save();
    }

    public function Get()
    {
        return $this->productCategory->all();
    }

    public function GetById($id)
    {
        $this->productCategory->find($id);
    }

    public function Update(array $data)
    {
        $this->productCategory->update($data, $data->id);
    }

    public function Delete(array $id)
    {
        $this->productCategory->delete($id);
    }
}