<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
   protected $table="UserInfo";
  protected  $fillable=['name','salary'];
}





// protected lgana compulsary kyu hai
// ek model se 2 table acess ho skte hai
// UserInfo m user ka email id aa skta hai dusre table se
// use hasfactory mtlb