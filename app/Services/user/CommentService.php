<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/9/2019
 * Time: 7:44 PM
 */

namespace EasyShop\Services\user;

use EasyShop\Models\Comments;
use \EasyShop\Repository\Repository;


class CommentService
{
    protected $commentContext;
    protected $comment;

    public function __construct(Comments $comment)
    {
        $this->comment = $comment;
        $this->commentContext = new Repository($comment);
    }

    public function addComment(array $data)
    {
        $user_id = auth()->id();
        $data += ["user_id" => $user_id];
        $data += ["status" => 1]; //waiting
        $comment = $this->commentContext->create($data);
        $this->commentContext->save();
        return $comment;
    }

    public function getUserComments()
    {
        $user_id = auth()->id();
        return $this->commentContext->findAllBy('user_id', $user_id);
    }

    public function getOrderCommentById($orderId)
    {
        return $this->comment->where(['section' => 1, 'section_id' => $orderId])->with('Users:first_name')->orderBy('id', 'DESC')->get();
    }
    public function getProductCommentById($productId)
    {
        return $this->comment->where(['section' => 2, 'section_id' => $productId])->with('Users:first_name')->orderBy('id', 'DESC')->get();
    }
}