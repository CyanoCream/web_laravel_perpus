<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    use HasFactory;
    protected $table = 'schools';
    protected $fillable =[];

    public function books(){
        return $this->belongsToMany('App\Models\Books');
    }
}
