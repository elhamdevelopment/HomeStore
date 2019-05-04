<?php

namespace HomeStore\Http\Controllers\User;

use HomeStore\Services\user\FavoriteService;
use HomeStore\Http\Controllers\Controller;

class FavoriteController extends Controller
{
    protected $favoriteService;

    public function __construct(FavoriteService $favoriteService)
    {
        $this->favoriteService = $favoriteService;
    }

    public function favorite()
    {
        return view('user.favorite');
    }

    public function getFavorite()
    {
        $favorite = $this->favoriteService->getUserFavorite();
        return createJsonResponse(200, 'success', $favorite);
    }

    public function deleteFavorite($id)
    {
        $result = $this->favoriteService->deleteFavorite($id);
        return createJsonResponse(200, 'success', $result);

    }
}
