<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'classes';
    protected $fillable = ['name', 'description'];

    public function studentClasses() { return $this->hasMany(StudentClass::class); }
    public function addClassToTerms() { return $this->hasMany(AddClassToTerm::class); }
    public function teacherClassSubjects() { return $this->hasMany(TeacherClassSubject::class); }
}
