<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $table = 'opt_project_agents';

    public function images()
    {
      return $this->hasMany(Developer_image::class);
    }
}
