<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $table = 'category';
    use HasFactory;

    protected $fillable = [
        'name', 'detail',
    ];
    public function File()
    {
        return $this->hasMany(file::class,'');
    }
}
