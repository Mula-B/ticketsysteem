<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'created_at', 'priority', 'subject', 'content', 'employee', 'closed'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
