<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'birthday',
    ];

    public function departments(){
        return $this->belongsTo(Department::class);
    }
}
