<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='books';
    protected $fillable=['titulo', 'pages', 'price', 'id_user'];

    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
}
