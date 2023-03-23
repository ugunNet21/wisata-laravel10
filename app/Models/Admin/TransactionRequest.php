<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    use HasFactory;

    public function authorized()
    {
        return true;
    }
    public function rules()
    {
        return [
            'transaction_status' => 'required|string|in:IN_CART,PENDING,SUCCESS,CANCEL,FAILED',
            // 'nationality' =>'required|string'
        ];
    }
}
