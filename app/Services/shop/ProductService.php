<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/12/2019
 * Time: 10:42 PM
 */

namespace HomeStore\Services\shop;


use HomeStore\Models\Products;
use HomeStore\Repository\Repository;

class ProductService
{
    protected $product;

    public function __construct(Products $products)
    {
        $this->product = new Repository($products);
    }

    public function Create(array $data)
    {
        $this->product->create($data);
        $this->product->save();
    }

    public function Get()
    {
        return $this->product->all();
    }

    public function GetById($id)
    {
        $this->product->find($id);
    }

    public function Update(array $data)
    {
        $this->product->update($data, $data->id);
    }

    public function Delete(array $id)
    {
        $this->product->delete($id);
    }
}