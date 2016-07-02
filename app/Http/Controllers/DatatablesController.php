<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\projects;
use DB;
use Yajra\Datatables\Datatables;



class DatatablesController extends Controller
{
   public function index()
   {
	    $ProjectList= DB::table('projects')->get();

	   	 return view('projects.projectTable', compact('ProjectList'));


   }
}
