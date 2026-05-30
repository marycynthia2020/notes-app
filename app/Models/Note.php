<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\WithoutTimestamps;
use Illuminate\Database\Eloquent\Model;


#[WithoutTimestamps]
class Note extends Model
{
   
    public $fillable = [
        'title',
        'description',
    ];

    public function user(){
       return $this->belongsTo(User::class);
    }
}
