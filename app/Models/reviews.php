<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class reviews extends Model
{
    use HasFactory;
   

   protected $table = 'reviews';
    
   protected $primarykey = 'id';
   
   protected $fillable = ['names', 'star', 'content', 'position', 'image'];

   public function getAllReviews(){

    $reviews = DB::select('SELECT * FROM reviews');

    return $reviews;
   }


}
