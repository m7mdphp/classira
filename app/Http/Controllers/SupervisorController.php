<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Supervisors;
use App\Genders;
use App\Nations;

class SupervisorController extends Controller
{
    public function index()
    {
        $supervisors=Supervisors::all();
       
        return view('panel.supervisors')->with('supervisors',$supervisors);
    }

    public function create()
    {
        $genders=Genders::all();
        $nations=Nations::all();
        return view('panel.add_supervisors')->with('genders',$genders)->with('nations',$nations);
    }

    public function store(Request $request)
    {

        

if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $imageSave = $name;
      }else{
        $imageSave = '0';
      }

         Supervisors::create([
            'id_num' => $request['id_num'],
            'name' => $request['name'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'first_name' => $request['first_name'],
            'father_name' => $request['father_name'],
            'grandfather_name' => $request['grandfather_name'],
            'family_name' => $request['family_name'],
            'gender' => $request['gender'],
            'born_date' => $request['born_date'],
            'born_place' => $request['born_place'],
            'adress' => $request['adress'],
            'phone' => $request['phone'],
            'mobile' => $request['mobile'],
            'email' => $request['email'],
            'section' => $request['section'],
            'nation' => $request['nation'],
            'image' => $imageSave,
        ]);
         return redirect('supervisors');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $supervisors = Supervisors::findOrFail($id);
        $genders=Genders::all();
        $nations=Nations::all();

        return view('panel.edit_supervisors')->with('supervisors',$supervisors)->with('genders',$genders)->with('nations',$nations);
    }

    public function update(Request $request, $id)
    {

if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $imageSave = $name;
      }else{
        $imageSave = $request->old_image;
      }

    $supervisors = Supervisors::find($id);
    $supervisors->id_num = $request->id_num;
    $supervisors->name = $request->name;
    $supervisors->username = $request->username;
    if(!empty($request['password'])){
    $supervisors->password = Hash::make($request['password']);    
    }
    $supervisors->first_name = $request->first_name;
    $supervisors->father_name = $request->father_name;
    $supervisors->grandfather_name = $request->grandfather_name;
    $supervisors->family_name = $request->family_name;
    $supervisors->gender = $request->gender;
    $supervisors->born_date = $request->born_date;
    $supervisors->born_place = $request->born_place;
    $supervisors->adress = $request->adress;
    $supervisors->phone = $request->phone;
    $supervisors->mobile = $request->mobile;
    $supervisors->email = $request->email;
    $supervisors->section = $request->section;
    $supervisors->nation = $request->nation;
    $supervisors->image = $imageSave;
    $supervisors->update();

    return redirect('supervisors');
    }

    public function destroy($id)
    {
        $supervisors = Supervisors::findOrFail($id);
    $supervisors->delete();

    return redirect('supervisors');
    }
}
