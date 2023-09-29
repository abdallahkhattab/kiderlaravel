<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolCLASS extends Model
{
    use HasFactory;
/*
   protected $table = ['sschool_class'];

    protected $fillable =[
        'class_page_title',
        'class_page_description',
        'class_image',
        'class_title',
        'class_teacher_name',
        'class_teacher_description',
        'class_teacher_image',
        'class_price',
        'class_time',
        'class_age',
        'class_capacity'
    ];
*/
        // Corrected $table property
        protected $table = 'school_class';

        protected $fillable = [
            'class_page_title',
            'class_page_description',
            'class_image',
            'class_title',
            'class_teacher_name',
            'class_teacher_description',
            'class_teacher_image',
            'class_price',
            'class_time',
            'class_age',
            'class_capacity',
        ];
}
