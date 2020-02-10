<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Slider;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empt = Slider::all();
        return view('admin.slider.index',compact('empt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       $this->validate($request,[
           'file'=>'required|image|mimes:jpeg,png,bmp,jpg'
           
       ]);
      if($request->hasFile('file')){
          $filename = $request->file->getClientOriginalName();
          $newfilename = rand().$filename;
          $filesize = $request->file->getClientSize();
          $request->file->storeAs('public/upload',$newfilename);
          $file = new Slider;
          $file->name = $newfilename;
          $file->size = $filesize;
          $file->save();
          return redirect(route('slider.index'));

      }
       
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
        $img = Slider::find($id);
        return view('admin.slider.edit',compact('img'));
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
      // return dd($request->all());
       if($request->hasFile('file')){
           $filenameU = $request->file->getClientOriginalName();
           $newfilenameU = rand().$filenameU;
           $filesizeU = $request->file->getClientSize();
           $request->file->storeAs('public/upload',$newfilenameU);
           $file = Slider::find($id);
           $file->name = $newfilenameU;
           $file->size = $filesizeU;
           $file->save();
           return redirect(route('slider.index'));
       }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $sliders = DB::table('sliders')->where('id',$id)->get();
        foreach ($sliders as $slider) {
           Storage::delete('public/upload/'.$slider->name);
        }
        Slider::where('id',$id)->delete();
        return redirect()->back();

        
        //dd(Storage::delete('public/upload/'.$img));
        //return redirect()->back();
        
    }
}
