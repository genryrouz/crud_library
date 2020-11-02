<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model {
    use HasFactory;

    public $table = 'authors';

    public function books()
  {
    return $this->hasMany('App\Models\Books', 'authors_id');
  }
}
