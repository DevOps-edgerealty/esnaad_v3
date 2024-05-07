<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'opt_categories';

    public function property() {
        return $this->belongsTo(App\Category::class);
    }
}
