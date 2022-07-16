<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function userTasks()
    {
        return $this->hasMany(Task::class, 'owner_id');
    }    

    public function tasksDescriptions()
    {
    	return $this->hasMany(TaskDescription::class, 'user_id');
    }
}
