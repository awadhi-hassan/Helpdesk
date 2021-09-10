<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'answer',
    ];
    
    public function question()
    {
        return $this->belongsTo(Questions::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
