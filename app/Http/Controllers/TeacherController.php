<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Teachers;
use App\Genders;
use App\Nations;

class TeacherController extends Controller
{
    
    public function index()
    {
        $teachers=Teachers::all();
       
        return view('panel.teachers')->with('teachers',$teachers);
    }

    public function create()
    {
        $genders=Genders::all();
        $nations=Nations::all();
        return view('panel.add_teachers')->with('genders',$genders)->with('nations',$nations);
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

         Teachers::create([
            'id_num' => $request['id_num'],
            'passport' => $request['passport'],
            'job_num' => $request['job_num'],
            'name' => $request['name'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'first_name' => $request['first_name'],
            'father_name' => $request['father_name'],
            'grandfather_name' => $request['grandfather_name'],
            'family_name' => $request['family_name'],
            'arabic_name' => $request['arabic_name'],
            'gender' => $request['gender'],
            'born_date' => $request['born_date'],
            'born_place' => $request['born_place'],
            'adress' => $request['adress'],
            'phone' => $request['phone'],
            'mobile' => $request['mobile'],
            'email' => $request['email'],
            'login' => $request['login'],
            'nation' => $request['nation'],
            'section' => $request['section'],
            'image' => $imageSave,
        ]);
         return redirect('teachers');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $teachers = Teachers::findOrFail($id);
        $genders=Genders::all();
        $nations=Nations::all();

        return view('panel.edit_teachers')->with('teachers',$teachers)->with('genders',$genders)->with('nations',$nations);
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

    $teachers = Teachers::find($id);
    $teachers->id_num = $request->id_num;
    $teachers->passport = $request->passport;
    $teachers->job_num = $request->job_num;
    $teachers->name = $request->name;
    $teachers->username = $request->username;
    if(!empty($request['password'])){
    $teachers->password = Hash::make($request['password']);    
    }
    $teachers->first_name = $request->first_name;
    $teachers->father_name = $request->father_name;
    $teachers->grandfather_name = $request->grandfather_name;
    $teachers->family_name = $request->family_name;
    $teachers->arabic_name = $request->arabic_name;
    $teachers->gender = $request->gender;
    $teachers->born_date = $request->born_date;
    $teachers->born_place = $request->born_place;
    $teachers->adress = $request->adress;
    $teachers->phone = $request->phone;
    $teachers->mobile = $request->mobile;
    $teachers->email = $request->email;
    $teachers->login = $request->login;
    $teachers->nation = $request->nation;
    $teachers->section = $request->section;
    $teachers->image = $imageSave;
    $teachers->update();

    return redirect('teachers');
    }

    public function destroy($id)
    {
    $teachers = Teachers::findOrFail($id);
    $teachers->delete();

    return redirect('teachers');
    }
}
