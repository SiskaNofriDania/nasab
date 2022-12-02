<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $table = 'info';
    protected $fillable = ['tipe','judul','isi'];

    public function scopeFilter($query)
    {
        if(request('search')){
            return $query->where('judul', 'like', '%'. request('search') . '%');
        }
    }
}
