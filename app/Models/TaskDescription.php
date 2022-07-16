<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskDescription extends Model
{
    use HasFactory;

    public function taskDescriptions()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
