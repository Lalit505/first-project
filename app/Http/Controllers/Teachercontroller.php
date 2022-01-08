<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Teacher;
use App\Models\Student;
class Teachercontroller extends Controller
{
    public function index(){
     return Teacher::where('id',2)->with('student')->first();
    }
}
