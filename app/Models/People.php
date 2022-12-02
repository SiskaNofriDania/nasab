<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $table = 'people';
    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if(request('search')){
            return $query->where('nama', 'like', '%'. request('search') . '%');
        }
    }
}
