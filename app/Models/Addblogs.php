<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Addblogs extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        "title","description"
    ];
    protected $table = "addblogs";
}
