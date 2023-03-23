<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
class GalleryRequest extends FormRequest
{
    use HasFactory;

    public function authorized()
    {
        return true;
    }
    public function rules()
    {
        return [
            'travel_packeges_id'=>'required|integer|exists:travel_packages,id',
            'image'=>'required|image',
        ];
    }
}
