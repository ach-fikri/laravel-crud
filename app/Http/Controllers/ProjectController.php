<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Project::all();
        return response()->view('Project.index', compact('data')
        );
    }

    public function add(){
        return response()->view('Project.add');
    }
    public function postAdd(Request $request){
       $this->validate($request,[
                'project_name' => 'required',
                'client' => 'required',
                'leader' => 'required',
                'start' => 'required|date',
                'end' => 'required|date',
                'progres' => 'required |integer'
                ]);
       $data = [
         'project_name' => $request->project_name,
          'clien' => $request->client,
           'project_leader' => $request->leader,
           'start_date' => $request->start,
           'end_date' => $request->end,
           'progres' => $request->progres
       ];
      Project::create($data);
      return redirect()->route('tampil');
    }

    public function update($id)
    {
       $data = Project::findOrFail($id);
       return response()->view('Project.update', [
           "data" => $data
       ]);
    }

    public function postUpdate(Request $request){
        $this->validate($request,[
            'project_name' => 'required',
            'client' => 'required',
            'leader' => 'required',
            'start' => 'required|date',
            'end' => 'required|date',
            'progres' => 'required |integer'
        ]);
        $data = new Project();
       $data->project_name = $request->project_name;
       $data->clien = $request->client;
       $data->project_leader = $request->leader;
       $data->start_date = $request->start;
       $data->end_date= $request->end;
       $data->progres = $request->progres;
       $data->save();
        return redirect()->route('tampil');
    }

    public function delete($id)
    {
        $data = Project::find($id);
        $data->delete();
        return redirect()->route('tampil');
    }
}
