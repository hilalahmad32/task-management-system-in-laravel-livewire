<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_id',
        'user_id',
        'title',
        'description',
        'status',
        'start_date',
        'end_date'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
