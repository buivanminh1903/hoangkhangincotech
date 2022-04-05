<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';

    protected $primaryKey = 'id';

    protected $fillable=['title', 'images'];

    public function getAllPhoto(){

        $photo = DB::select('SELECT * FROM photos ');

        return $photo;
    }
}
