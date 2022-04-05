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
   
   protected $fillable = ['subject', 'messages', 'names' , 'email' , 'phone' ,'position'];

   public function getAllContactus(){

    $contactus = DB::select('SELECT * FROM contactus');

    return $contactus;
   }


}
