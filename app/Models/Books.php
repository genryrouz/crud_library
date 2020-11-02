<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public $table = 'books';

    public function authors()
    {
      return $this->belongsTo('App\Models\Author');
    }
}
