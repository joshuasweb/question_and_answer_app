<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'text'
    ];

    public function answers()
    {
        return $this->hasMany(QuestionAnswer::class);
    }

    public function getHasAnswersAttribute()
    {
        return $this->answers->count() >= 1;
    }
}
