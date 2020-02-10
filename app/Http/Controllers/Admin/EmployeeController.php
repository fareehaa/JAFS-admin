<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Employee;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = Employee::all();
        return view('admin.employees.index',compact('emps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return dd($request->all());
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'email'=>'required',
            'age'=>'required',
            'adr'=>'required',
            'code'=>'required',
            'status'=>'required',
            'adhar'=>'required',
             'img'=>'required',
             'address'=>'required',
           
        ]);
        if($request->hasFile('address')){
            $addr = $request->name.'_address_'.$request->address->getClientOriginalName();
            $request->address->storeAs('public/upload/employee',$addr);
        }
        if($request->hasFile('adhar')){
            $adhar = $request->name.'_adhar_'.$request->adhar->getClientOriginalName();
            $request->adhar->storeAs('public/upload/employee',$adhar);
        }
        if($request->hasFile('img')){
           $image =$request->name.'_profile_'.$request->img->getClientOriginalName();
           $request->img->storeAs('public/upload/employee',$image); 
        }
        $emp = new Employee;
        $emp->name = $request->name;
        $emp->phone = $request->phone;
        $emp->code = $request->code;
        $emp->address = $request->address;
        $emp->age = $request->age;
        $emp->email = $request->email;
        $emp->password = $request->password;
        $emp->adr = $request->adr;
        $emp->status = $request->status;
        $emp->adhar = $adhar;
        $emp->image = $image;
        $emp->address = $addr;
        $emp->save();
        return redirect(route('employee.index'));

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
        $emp = Employee::find($id);
        return view('admin.employees.edit',compact('emp'));
        
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
            'name'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'email'=>'required',
            'age'=>'required',
            'adr'=>'required',
            'code'=>'required',
            'status'=>'required',
            'adhar'=>'required',
            'image'=>'required',
            'address'=>'required',           
        ]);
        if($request->hasFile('address')){
            $addr = $request->name.'_address_'.$request->address->getClientOriginalName();
            $request->address->storeAs('public/upload/employee',$addr);
        }
        if($request->hasFile('adhar')){
            $adhar = $request->name.'_adhar_'.$request->adhar->getClientOriginalName();
            $request->adhar->storeAs('public/upload/employee',$adhar);
        }
        if($request->hasFile('img')){
           $image =$request->name.'_profile_'.$request->img->getClientOriginalName();
           $request->img->storeAs('public/upload/employee',$image); 
        }
        $emp =  Employee::find($id);
        $emp->name = $request->name;
        $emp->phone = $request->phone;
        $emp->code = $request->code;
        $emp->address = $request->address;
        $emp->age = $request->age;
        $emp->email = $request->email;
        $emp->password = $request->password;
        $emp->adr = $request->adr;
        $emp->status = $request->status;
        $emp->adhar = $adhar;
        $emp->image = $image;
        $emp->address = $addr;
        $emp->save();
        return redirect(route('employee.index'));
       // return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       $emps = DB::table('employees')->where('id',$id)->get();
       foreach($emps as $emp){
       
        Storage::delete('public/upload/employee/'.$emp->image);
        Storage::delete('public/upload/employee/'.$emp->address);
        Storage::delete('public/upload/employee/'.$emp->adhar);
       }
        Employee::where('id',$id)->delete();
        return redirect()->back();
    }
}
