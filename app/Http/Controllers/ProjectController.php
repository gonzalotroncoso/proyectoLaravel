<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Http\Request;
//use DB;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
    
    public function index()
    {
  //    $portfolio = DB::table('projects')->get();
        //$portfolio = Project::get();
        //$portfolio = Project::orderBy('created_at','ASC')->get();
        //$portfolio = Project::latest('title')->get();//ordena por titulo Desc
        //$portfolio = Project::latest()->get();//si no le paso parametro ordena por created_at
        //$projects = Project::paginate(1);
       return view('/projects.index',[
            'projects' => $projects = Project::paginate()
       ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project;
       return view('projects.create',['project'=>new Project] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
      
       Project::create($request->validated());
        return redirect()->route('projects.index')->with('status','El proyecto fue creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        return view('projects.show',[
            'project' => Project::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
       return view('projects.edit',[
        'project'=>$project
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
      $project->update($request->validated());
      return redirect()->route('projects.show',$project)->with('status','El proyecto fue actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con exito');
    }
}
