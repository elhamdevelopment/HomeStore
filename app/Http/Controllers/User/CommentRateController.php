<?php

namespace EasyShop\Http\Controllers\User;

use EasyShop\Services\user\CommentService;
use EasyShop\Http\Controllers\Controller;
use EasyShop\Services\user\RateService;
use Illuminate\Http\Request;

class CommentRateController extends Controller
{
    protected $commentService;
    protected $rateService;

    public function __construct(CommentService $commentService, RateService $rateService)
    {
        $this->commentService = $commentService;
        $this->rateService = $rateService;
    }

    public function comment()
    {
        return view('user.add-comment');
    }
    public function getComment()
    {
        return view('user.comment-list');
    }

    //comment function
    public function addComment(Request $request)
    {
        $userComment = $this->commentService->addComment($request->all());
        return createJsonResponse(200, 'success', $userComment);
    }

    public function getOrderComments(Request $request)
    {
        $orderId = $request->input('orderId');
        $Comment = $this->commentService->getOrderCommentById($orderId);
        return createJsonResponse(200, 'success', $Comment);

    }

    //rate function
    public function addRate(Request $request)
    {
        $userComment = $this->rateService->addRate($request->all());
        return createJsonResponse(200, 'success', $userComment);
    }

    public function getShopRate(Request $request)
    {
        $shopId = $request->input('shopId');
        $rate = $this->rateService->getShopRate($shopId);
        return createJsonResponse(200, 'success', $rate);

    }

    public function getProductRate(Request $request)
    {
        $productId = $request->input('productId');
        $rate = $this->rateService->getProductRate($productId);
        return createJsonResponse(200, 'success', $rate);

    }
}
