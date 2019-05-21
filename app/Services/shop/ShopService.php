<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/12/2019
 * Time: 10:42 PM
 */

namespace EasyShop\Services\shop;


use EasyShop\Models\Shops;
use EasyShop\Repository\Repository;

class ShopService
{
    protected $shopContext;
    protected $shop;

    public function __construct(Shops $shop)
    {
        $this->shopContext = new Repository($shop);
        $this->shop = $shop;
    }

    public function searchRestaurant($city, $coveredArea, $shopName)
    {
        $query = $this->shop::query();
        $shops = $query
            ->where('shop_category_id', '=', 1)
            ->where('city', '=', $city)
            ->orwhere('title', 'like', '%' . $shopName . '%')
            ->orwhere('covered_area', 'like', '%' . $coveredArea . '%')
            ->orderBy('title')
            ->take(100)
            ->get();
        return $shops;
    }

    public function getDiscountShops(string $city)
    {
        $query = $this->shop::query();
        $shops = $query->select(['id', 'title', 'location', 'discount', 'logo'])
            ->where(['is_discount' => 1, 'shop_category_id' => 1, 'city' => $city])
            ->orderByDesc('discount')
            ->take(15)
            ->get();
        return $shops;
    }

    public function getSpecialShops()
    {
        $query = $this->shop::query();
        $shops = $query->select(['id', 'title', 'discount', 'logo'])
            ->where(['is_special' => 1, 'shop_category_id' => 1])
            ->orderBy('title')
            ->take(15)
            ->get();
        return $shops;
    }

    public function getSelectShops(string $city)
    {
        $query = $this->shop::query();
        $shops = $query->select(['id', 'title', 'logo'])
            ->where(['is_select' => 1, 'shop_category_id' => 1, 'city' => $city])
            ->orderBy('title')
            ->take(15)
            ->get();
        return $shops;
    }

    public function getUserShop()
    {
        $user_id = auth()->id();
        $this->shopContext->findBy('user_id', $user_id);
    }

    public function updateAddress(array $data)
    {
        $user_id = auth()->id();
        return $this->shopContext->update($data, $user_id);
    }
}