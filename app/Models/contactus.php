<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class contactus extends Model
{
    use HasFactory;
   

   protected $table = 'contactus';
    
   protected $primarykey = 'id';
   
<<<<<<< HEAD
   protected $fillable = ['subject', 'messages', 'name' , 'email' , 'phone'];
=======
   protected $fillable = ['subject', 'messages', 'names' , 'email' , 'phone' ,'position'];
>>>>>>> f67e7f3c58ccfd9193e4a733ddace564b5f8dcb3

   public function getAllContactus(){

    $contactus = DB::select('SELECT * FROM contactus');

    return $contactus;
   }


}
