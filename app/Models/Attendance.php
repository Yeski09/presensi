<?php

namespace App\Models;

use App\Traits\UseUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory, UseUUID;

    protected $table = 'attendances';

    protected $fillable = [
        'employee_id',
        'date'
    ];

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id','id');
    }
}
