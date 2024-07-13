<?php

namespace App\Models;

use App\Traits\UseUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory, UseUUID;

    protected $fillable = [
        'full_name',
        'department',
        'nik',
        'address',
        'dob',
        'birth_place',
        'join_date',
        'join_age',
        'user_id'
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function attendance() {
        return $this->hasMany(Attendance::class);
    }
}
