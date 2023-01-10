<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FaqController extends Controller
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
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);


        try{
            $course = new Course();
            $course->course_id = $request->course_id;
            $course->course_name = $request->course_name;
            $course->uni_name = $request->course_name;
            $course->req_id = $request->req_id;

            $course->save();

            return redirect()->route('course.index')
            ->with('success','Data created successfully.');

        } catch (\Exception $e) {
            Log::info('Store the Student: '. $e->getMessage());
            echo 'Error,call admin' ;


        }

    }
}
