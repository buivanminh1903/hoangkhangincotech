<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ourprojectModel extends Model
{
    use HasFactory;
    protected $table ='project';
    protected  $primaryKey ='id';
    protected  $fillable =['titles','descriptions','images','categorys'];
    public  $timestamps = false;
}
