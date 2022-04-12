<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ourprojectModel extends Model
{
    use HasFactory;

    protected $table = 'project';
    protected $fillable = ['titles', 'descriptions', 'images', 'categorys'];
    public $timestamps = true;



}
