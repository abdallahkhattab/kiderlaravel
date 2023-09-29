<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TESTEMONIAL extends Model
{
    use HasFactory;

    protected $table = 'testemonial';

    protected $fillable =[
        'page_title','page_description','client_name',
        'client_job','client_image','client_comment'
    ];
}
  