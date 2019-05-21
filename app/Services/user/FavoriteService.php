<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

namespace EasyShop\Services\user;

use EasyShop\Models\UserFavorite;
use \EasyShop\Repository\Repository;
use Illuminate\Http\Request;


class FavoriteService
{
    protected $favoriteContext;
    protected $repository;

    public function __construct(UserFavorite $favorite)
    {
        $this->favoriteContext = new Repository($favorite);
    }

    public function getUserFavorite()
    {
        $user_id = auth()->id();
        $productFavorite = $this->favoriteContext->whereWith(['product:id,title,description,total_rate,image_url,price'], 'user_id', $user_id);
        $shopFavorite = $this->favoriteContext->whereWith(['shop:id,title,logo,total_rate'], 'user_id', $user_id);
        return ['productFavorite' => $productFavorite, 'shopFavorite' => $shopFavorite];
    }

    public function deleteFavorite(Request $request)
    {
        $id = $request->input('id');
        if ($id != 0) {
            $user_id = auth()->id();
            return $this->favoriteContext->deleteWhere(['user_id' => $user_id, 'id' => $id]);
        } else
            throw new Exception('بروز خطا در سسیتم.');
    }
}