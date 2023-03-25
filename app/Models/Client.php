<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Client extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at', 'updated_at'];

    // protected $with = ['tasks'];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'client_id', 'id');
    }
}
