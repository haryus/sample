<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "staffs";
    protected $fillable = [
        "firstName","lastName","position","email","phoneNumber","hireDate",
    ];

    protected $dates = ["created_at", "updated_at"];
}
