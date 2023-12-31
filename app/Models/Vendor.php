<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[];

    function user() {
        return $this->belongsTo(User::class)->withDefault();
    }

    function category() {
        return $this->belongsTo(Category::class)->withDefault();
    }

    function product() {
        return $this->hasMany(Product::class);
    }

    function note() {
        return $this->hasMany(Note::class);
    }
}
