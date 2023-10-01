<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class POPULARTEACHER extends Model
{
    use HasFactory;

    protected $table = 'popular_teacher';
    protected $fillable = 
   [ 'page_title',
   'page_description',
    'teacher_name',
   'teacher_job',
   'teacher_facebook',
   'teacher_image'];
}
