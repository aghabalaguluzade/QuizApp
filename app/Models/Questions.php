<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $fillable = ['quiz_id', 'question', 'answer1', 'answer2', 'answer3', 'answer4', 'correct_answer', 'image'];

    public function quiz() {
        return $this->belongsTo(Quiz::class);
    }
}