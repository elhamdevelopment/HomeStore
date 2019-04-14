<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/12/2019
 * Time: 10:42 PM
 */

namespace HomeStore\Services\Auth;


use HomeStore\Models\ProductCategory;
use HomeStore\Models\productCategoryCategory;
use HomeStore\Repository\Repository;

class productCategoryCategoryService
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