<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['student_id', 'profile', 'last_name', 'first_name', 'gender', 'email', 'password', 'province', 'generation_id'];
    protected $hidden = ['password'];

    public function generation() { return $this->belongsTo(Generation::class); }
    public function studentClasses() { return $this->hasMany(StudentClass::class); }
}
