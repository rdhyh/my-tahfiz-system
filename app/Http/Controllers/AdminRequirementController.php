<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Requirement;
use App\Models\Stream;
use App\Models\Universities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminRequirementController extends Controller
{
    public function index()
    {
      
        try {


            $streams = Stream::get() ;
            $universities = Universities::get() ;
            $courses = Course::get() ;


           $requirements = DB::table('requirements')
           ->join('courses', 'requirements.course_id', '=', 'courses.course_id')
           ->join('streams', 'requirements.stream_id', '=','streams.stream_id' )
           
             ->get();


            return view('adminrequirement.index', compact('requirements', 'courses', 'streams', 'universities'));



        } catch (\Exception $e){
            Log::info('Showing the Student: '. $e->getMessage());
            echo 'Error, call admin' ;
    }
    }
    
    public function store(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'course_name' => 'required',
            'stream_name' => 'required',
            'req_subject' => 'required',
            'req_grade' => 'required',
            
        ]);

            
                $requirements = new Requirement();
                $requirements->id = $request->id;
                $requirements->course_id = $request->course_name;
                $requirements->stream_id = $request->stream_name;
                $requirements->req_grade = $request->req_grade;
                $requirements->req_subject = $request->req_subject;
                $requirements->save();
    
                return redirect()->route('adminrequirement.index')
                ->with('success','Data created successfully.');


        
    } 


    
    public function destroy(Requirement $requirement)
    {
        $requirement->delete();

        return redirect()->route('adminrequirement.index')
            ->with('success','Data deleted successfully');
    }

    public function update(Request $request, Requirement $requirement)
    {
        $request->validate([
            'id' => 'required',
            'course_id' => 'required',
            'stream_id' => 'required',
            'req_subject' => 'required',
            'req_grade' => 'required',
        ]);

        $requirement = Requirement::find($requirement->id);
        $requirement->id = $request->id;
        $requirement->course_id = $request->course_id;
        $requirement->stream_id = $request->stream_id;
        $requirement->req_subject = $request->req_subject;
        $requirement->req_grade = $request->req_grade;
        $requirement->save();

        return redirect()->route('adminrequirement.index')
            ->with('success','Data updated successfully.');
    }

}
