<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public $table ='contact';
    use HasFactory;
    public $fillable = [
        'name', 'email', 'phone',  'message'
    ];
}
