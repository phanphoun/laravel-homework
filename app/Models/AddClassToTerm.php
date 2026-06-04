<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddClassToTerm extends Model
{
    protected $table = 'add_class_to_terms';
    protected $fillable = ['term_id', 'class_id'];

    public function term() { return $this->belongsTo(Term::class); }
    public function class() { return $this->belongsTo(ClassModel::class, 'class_id'); }
}
