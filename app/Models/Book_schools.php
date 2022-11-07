<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_schools extends Model
{
    use HasFactory;

    protected $table = 'book_schools';
    protected $fillable =[];

    public function schools(){
        return $this->belongsTo(Schools::class, 'school_id');
    }

    public function books(){
        return $this->belongsTo(Books::class, 'book_id');
    }

    // public function pinjam(){
    //     return $this->belongsTo(Pinjams::class, 'id_pinjam');
    // }
}
