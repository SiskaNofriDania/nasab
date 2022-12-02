<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banner';
    protected $fillable = ['judul','banner'];

    public function scopeFilter($query)
    {
        if(request('search')){
            return $query->where('judul', 'like', '%'. request('search') . '%');
        }
    }




}
