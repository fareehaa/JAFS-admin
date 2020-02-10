<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $this->validate($request,[
            'projectcode'=>'required',
            'companyname'=>'required',
            'logo'=>'required',
            'description'=>'required',
            'location'=>'required',
            'imageone'=>'required',
            'imagetwo'=>'required',
            'imagethree'=>'required',
            'imagefour'=>'required',
            'status'=>'required',
            ]);
            if($request->hasFile('logo')){
                $logo = $request->projectcode.'-'.$request->companyname.'-'.$request->logo->getClientOriginalName();
                $request->logo->storeAs('public/upload/project',$logo);
               }
            if($request->hasFile('imageone')){
                $imageone = $request->projectcode.'-'.$request->companyname.'-'.$request->imageone->getClientOriginalName();
                $request->imageone->storeAs('public/upload/project',$imageone);
            }
            if($request->hasFile('imagetwo')){
                $imagetwo = $request->projectcode.'-'.$request->companyname.'-'.$request->imagetwo->getClientOriginalName();
                $request->imagetwo->storeAs('public/upload/project',$imagetwo);
            }
            if($request->hasFile('imagethree')){
                $imagethree = $request->projectcode.'-'.$request->companyname.'-'.$request->imagethree->getClientOriginalName();
                $request->imagethree->storeAs('public/upload/project',$imagethree);
            }
            if($request->hasFile('imagefour')){
                $imagefour = $request->projectcode.'-'.$request->companyname.'-'.$request->imagefour->getClientOriginalName();
                $request->imagefour->storeAs('public/upload/project',$imagefour);
            }
        $project = new Project;
        $project->projectcode = $request->projectcode;
        $project->companyname = $request->companyname;
        $project->logo = $logo;
        $project->location = $request->location;
        $project->description = $request->description;
        $project->imageone = $imageone;
        $project->imagetwo = $imagetwo;
        $project->imagethree = $imagethree;
        $project->imagefour = $imagefour;
        $project->status = $request->status;
       
        $project->save();
        return redirect(route('project.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.projects.edit',compact('project'));
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
        $this->validate($request,[
            'projectcode'=>'required',
            'companyname'=>'required',
            'logo'=>'required',
            'description'=>'required',
            'location'=>'required',
            'imageone'=>'required',
            'imagetwo'=>'required',
            'imagethree'=>'required',
            'imagefour'=>'required',
            'status'=>'required',
            ]);
            if($request->hasFile('logo')){
                $logo = 'updated-'.$request->projectcode.'-'.$request->companyname.'-'.$request->logo->getClientOriginalName();
                $request->logo->storeAs('public/upload/project',$logo);
               }
            if($request->hasFile('imageone')){
                $imageone = 'updated-'.$request->projectcode.'-'.$request->companyname.'-'.$request->imageone->getClientOriginalName();
                $request->imageone->storeAs('public/upload/project',$imageone);
            }
            if($request->hasFile('imagetwo')){
                $imagetwo = 'updated-'.$request->projectcode.'-'.$request->companyname.'-'.$request->imagetwo->getClientOriginalName();
                $request->imagetwo->storeAs('public/upload/project',$imagetwo);
            }
            if($request->hasFile('imagethree')){
                $imagethree = 'updated-'.$request->projectcode.'-'.$request->companyname.'-'.$request->imagethree->getClientOriginalName();
                $request->imagethree->storeAs('public/upload/project',$imagethree);
            }
            if($request->hasFile('imagefour')){
                $imagefour = 'updated-'.$request->projectcode.'-'.$request->companyname.'-'.$request->imagefour->getClientOriginalName();
                $request->imagefour->storeAs('public/upload/project',$imagefour);
            }
        $project =  Project::find($id);
        $project->projectcode = $request->projectcode;
        $project->companyname = $request->companyname;
        $project->logo = $logo;
        $project->location = $request->location;
        $project->description = $request->description;
        $project->imageone = $imageone;
        $project->imagetwo = $imagetwo;
        $project->imagethree = $imagethree;
        $project->imagefour = $imagefour;
        $project->status = $request->status;
       
        $project->save();
        return redirect(route('project.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
       $projects = DB::table('projects')->where('id',$id)->get();
       foreach($projects as $project){
        Storage::delete('public/upload/project'.$project->logo);
        Storage::delete('public/upload/project'.$project->imageone);
        Storage::delete('public/upload/project'.$project->imagetwo);
        Storage::delete('public/upload/project'.$project->imagethree);
        Storage::delete('public/upload/project'.$project->imagefour);
       }
        Project::where('id',$id)->delete();
        return redirect()->back();
    }
}
