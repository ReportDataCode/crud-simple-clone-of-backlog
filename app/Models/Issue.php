<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = ['subject', 'description', 'assignee', 'start_date', 'due_date', 'priority', 'status' ];
}
