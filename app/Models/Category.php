<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[];

    function user() {
        return $this->belongsTo(User::class)->withDefault();
    }
    function vendor(){
        return $this->hasMany(Vendor::class);
    }
}
