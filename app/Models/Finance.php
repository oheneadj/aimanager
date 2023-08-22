<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'description', 'income_or_expense', 'user_id',];


    public function user()
    {
        $this->belongsTo(User::class);
    }
}
