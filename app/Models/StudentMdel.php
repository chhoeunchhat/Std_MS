<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMdel extends Model
{
    protected $table='student';
    protected $primarykey='id';
    protected $fillable=['fullname','gender','dob','phone','subject','active'];
    use HasFactory;
}
