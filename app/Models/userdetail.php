<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdetail extends Model
{
    use HasFactory;


    public $table="userdetails";

    public $primary_key= "id";

    public $timestamps=false;
    protected $fillable = [
        'Name',
        'Role',
        

    ] ;


}
