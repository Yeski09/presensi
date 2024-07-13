<?php

namespace App\Models;

use App\Traits\UseUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, UseUUID;

    protected $fillable = [
        'name'
    ];

    public function users() {
        return $this->hasMany(User::class);
    }
}
