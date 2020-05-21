<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CProductDiscount extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    function form()
    {
        return view('product_discount');
    }

    function calculate()
    {
        $productDescription = $this->request->productDescription;
        $price = $this->request->price;
        $discountPercent = $this->request->discountPercent;
        $discountAmount = $price * $discountPercent / 100;
        $discountPrice = $price - $discountAmount;

        return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
    }

}
