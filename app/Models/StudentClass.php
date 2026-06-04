<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $table = 'student_classes';
    protected $fillable = ['class_id', 'student_id'];

    public function class() { return $this->belongsTo(ClassModel::class, 'class_id'); }
    public function student() { return $this->belongsTo(Student::class); }
}
