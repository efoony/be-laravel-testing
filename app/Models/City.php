<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
    ];

    public function provinceDetails()
    {
      return $this->hasOne(Province::class, "id", "province_id");
    }
}
