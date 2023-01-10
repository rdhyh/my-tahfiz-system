<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    public function index()
    {
      
        try {

            $courses = Course::get() ;
            return view('course.index', compact('courses'));

            


        } catch (\Exception $e){
            Log::info('Showing the Student: '. $e->getMessage());
            echo 'Error, call admin' ;
    }
    }
    
}
