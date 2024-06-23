<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

class StudentClass extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function sections()
    {
        return $this->hasMany(Section::class, 'class_id');
    }
}
