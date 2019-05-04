<?php

namespace HomeStore\Http\Controllers\User;

use HomeStore\Services\user\SupportService;
use HomeStore\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    protected $supportService;

    public function __construct(SupportService $supportService)
    {
        $this->supportService = $supportService;
    }

    public function support()
    {
        return view('user.support-contact');
    }

    public function addSupport(Request $request)
    {
        $support = $this->supportService->addSupport($request->all());
        return createJsonResponse(200, 'success', $support);

    }

}
