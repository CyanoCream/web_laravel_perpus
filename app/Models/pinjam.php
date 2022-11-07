<?php

namespace App\Models;
use App\Models\Book_schools;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    use HasFactory;
    protected $table = 'pinjams';
    protected $fillable =[];

    public function Book_Schools()
    {
        return $this->hasMany(Book_schools::class, 'id');
    }
}
