<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Newletter extends Model
{
    use HasFactory;

    protected $table = 'newletter';

    protected $primaryKey = 'id';

    protected $fillable=['email'];

    

    public function getAllNewletter(){

        $new_letter = DB::select('SELECT * FROM newletter ');

        return $new_letter;
    }

   

    
}
