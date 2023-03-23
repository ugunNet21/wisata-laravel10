<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'travel_packeges_id', 'image'
    ];

    protected $hidden = [

    ];
    // membuat relasi tabel travel_packages dengan galleries
    // perhatikan nama fungsi travel_package - bisa eror jika dengan travel_packages
    // https://stackoverflow.com/questions/47906034/call-to-undefined-relationship-in-laravel
    // Call to undefined relationship in
    public function travel_package(){
        return $this->belongsTo(TravelPackage::class, 'travel_packeges_id', 'id');
    }
}
