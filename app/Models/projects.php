<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;

    public $table="projects";

    public $primary_key= "pid";

    public $timestamps=false;
    protected $fillable = [
        'pid ',
        'Project_Name',
        'projectimage',
        'companyid',
       
    ];
}
