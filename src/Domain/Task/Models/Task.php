<?php

namespace Domain\Task\Models;

use Domain\Task\Enums\TaskStatus;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Task extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'task',
        'category'
    ];

    public function getStatusAttribute($value): string
    {
        return TaskStatus::status($value);
    }
}
