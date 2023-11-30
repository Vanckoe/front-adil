<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_id' => 'required|exists:products,id',
            'client_id' => 'required|exists:clients,id',
            'dateBuy' => 'required|datetime',
        ];
    }
}
