<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    public $table = 'team';
    use HasFactory;
    protected $fillable =['name','Designation',];
}
