<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
  use HasFactory;
  protected $primaryKey = 'id';
  protected $table='applications';
  public $timestamps=false;

  protected $fillable=[
    'student_id',
    'program_id',
  ];


}
