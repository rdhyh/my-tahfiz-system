<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Universities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminCourseController extends Controller
{
    public function index()
    {
      
        try {


            $courses = Course::get() ;
            return view('admincourse.index', compact('courses'));


        } catch (\Exception $e){
            Log::info('Showing the Student: '. $e->getMessage());
            echo 'Error, call admin' ;
    }
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'course_name' => 'required',
            'uni_name' => 'required',
            'uni_location' => 'required',
        ]);

        try{
            $course = new Course();
            $course->course_id = $request->course_id;
            $course->course_name = $request->course_name;
            $course->uni_name = $request->uni_name;
            $course->uni_location = $request->uni_location;
           
            $course->save();
            

            return redirect()->route('admincourse.index')
            ->with('success','Data created successfully.');

        } catch (\Exception $e) {
            Log::info('Store the Student: '. $e->getMessage());
            echo 'Error,call adminn' ;


        }

    }



    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('admincourse.index')
            ->with('success','Data deleted successfully');
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_id' => 'required',
            'course_name' => 'required',
            'uni_name' => 'required',
            'uni_location' => 'required',
        ]);

        $course = Course::find($course->course_id);
        $course->course_id = $request->course_id;
        $course->course_name = $request->course_name;
        $course->uni_name = $request->uni_name;
        $course->uni_location = $request->uni_location;
        $course->save();

        return redirect()->route('admincourse.index')
            ->with('success','Data updated successfully.');
    }

}
