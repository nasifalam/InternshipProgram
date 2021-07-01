<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
  use HasFactory;
  protected $primaryKey = 'id';
  protected $table='programs';
  public $timestamps=false;

  protected $fillable = [
    'buildingU_Program_Type',
    'program_Title',
    'program_Area',
    'program_Skills',
    'program_Start_Date',
    'program_End_Date',
    'program_Country',
    'program_City',
    'program_Address',
    'program_Hosting_Organization',
    'program_Enrollement_Space',
  ];



}
