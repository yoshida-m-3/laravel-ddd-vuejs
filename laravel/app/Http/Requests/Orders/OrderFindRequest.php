<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class OrderFindRequest extends FormRequest
{
    public function rules()
    {
        return [
            'orderId' => ['required', 'numeric'],
        ];
    }
}
