<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
            
use App\projects;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $list = projects::latest()->get();
        $projectList = projects::Orderby('date','decs')->get();
        return view('mastertimer',compact('projectList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(request $request)
    {
        $validator = \Validator::make($request->all(), [
        'title' => 'required|max:255',
        'details' => 'required',
        'date' => 'required',
        ]);


            if ($validator->fails()) {
                return redirect('project/create')->withErrors($validator)->withInput();
            }

        $projectInfo = new projects(array(

        'title'     => $request->get('title'),
        // $order->unload_date=date("Y-m-d",strtotime(Input::get('unload_date));
        'date'      => date('Y-m-d', strtotime($request->get('date'))),

        'details'   => $request->get('details'),
            ));

        $projectInfo->save();
 
        //return redirect('/project/create');

        return \Redirect::route('createProject')->with('message', 'Your project has been added successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

     public function show($id)
    {

        $project = projects::FindOrFail($id);

         return view('show', compact('project'));
    }

    public function showProjectList()
    {
        return view('projects.projectTable');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = projects::FindOrFail($id);
        return view("projects.edit",compact('project'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = projects::FindOrFail($id);
        $project->update([
            'title' => $request->get('title'),
            'details'=> $request->get('details'),
            'date'  => date('Y-m-d', strtotime($request->get('date')))
            ]);
    return \Redirect::route('ListProject',
        array($project->id))->with('message', 'Your list has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        projects::destroy($id);
        return \Redirect::route('ListProject')->with('message','The project is deleted successfully');
    }

public function postSearch()

    {
    $q = Input::get('query');
    $searchTerms = explode(' ', $q);
    $query = DB::table('projects');
    foreach($searchTerms as $term)
    {
        $query->where('title', 'LIKE', '%'. $term .'%')->first();
    }
    $result = $query->get();
        return view('show', ['result'=> $result]);
    }
    
}
