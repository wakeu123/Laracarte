<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $fillable = ['name', 'email', 'msg_content'];
}
