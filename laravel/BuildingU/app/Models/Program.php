<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
  use HasFactory;
  protected $primaryKey = 'Program ID';
  protected $table='programs';
  public $timestamps=false;




}
