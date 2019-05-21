<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

namespace EasyShop\Services\user;

use EasyShop\Models\Rates;
use \EasyShop\Repository\Repository;
use Illuminate\Http\Request;


class RateService
{
    protected $rateContext;
    protected $rate;

    public function __construct(Rates $rate)
    {
        $this->rate = $rate;
        $this->rateContext = new Repository($rate);
    }

    public function addRate(array $data)
    {
        $rate = new Rates();
        $rate->section = $data['section'];
        $rate->section_id = $data['section_id'];
        $rate->section = $data['rate'];
        $rate->user_id = auth()->id();
        $this->rateContext->saveModel($rate);
        return $rate;
    }

    public function getShopRate($orderId)
    {
        return $this->rate->where(['section' => 1, 'section_id' => $orderId])->with('Users:first_name')->orderBy('id', 'DESC')->get();
    }

    public function getProductRate($productId)
    {
        return $this->rate->where(['section' => 2, 'section_id' => $productId])->with('Users:first_name')->orderBy('id', 'DESC')->get();
    }
}