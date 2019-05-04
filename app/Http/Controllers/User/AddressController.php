<?php

namespace HomeStore\Http\Controllers\User;

use HomeStore\Http\Requests\AddressRequest;
use HomeStore\Services\user\AddressService;
use HomeStore\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AddressController extends Controller
{
    protected $addressService;

    public function __construct(AddressService $addressService)
    {
        $this->addressService = $addressService;
    }

    public function address()
    {
        return view('user.address-manage');
    }

    public function getAddress()
    {
        $userAddress = $this->addressService->getUserAddress();
        return createJsonResponse(200, 'success', $userAddress);
    }

    public function addAddress(AddressRequest $request)
    {
        $address = $this->addressService->addAddress($request->all());
        return createJsonResponse(200, 'success', $address);

    }

    public function updateAddress(AddressRequest $request)
    {
        $address = $this->addressService->updateAddress($request);
        return createJsonResponse(200, 'success', $address);

    }

    public function deleteAddress(Request $request)
    {
        $id=$request->input('id');
        $result = $this->addressService->deleteAddress($id);
        return createJsonResponse(200, 'success', $result);

    }
}
