<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Requirement;
use App\Models\Universities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RequirementController extends Controller
{
    public function index()
    {
      
         //   $requirements = Requirement::get() ;
          //  return view('requirement.index', compact('requirements'));

          $requirements = DB::table('requirements')
            ->join('courses', 'requirements.course_id', '=', 'courses.course_id')
            ->join('streams', 'requirements.stream_id', '=', 'streams.stream_id')
            ->get();
            return view('requirement.index', compact('requirements'));


    }
}
