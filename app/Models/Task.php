<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function task()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function descriptions()
    {
        return $this->hasMany(TaskDescription::class, 'task_id');
    }
}
