<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Students;
use App\Genders;
use App\Nations;
use App\Classes;
use App\Enteryears;
use App\Semesters;

class StudentController extends Controller
{

    public function index()
    {
         $students=Students::where('class', '>',0)->get();
       
        return view('panel.students')->with('students',$students);
    }

    public function create()
    {
        $genders=Genders::all();
        $nations=Nations::all();
        $classes=Classes::all();
        $semesters=Semesters::all();
        $enteryears=Enteryears::all();
        return view('panel.add_students')->with('genders',$genders)->with('nations',$nations)->with('enteryears',$enteryears)->with('semesters',$semesters)->with('classes',$classes);
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

         Students::create([
            'id_num' => $request['id_num'],
            'passport' => $request['passport'],
            'file' => $request['file'],
            'enter_year' => $request['enter_year'],
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
            'arabic_born_place' => $request['arabic_born_place'],
            'adress' => $request['adress'],
            'phone' => $request['phone'],
            'mobile' => $request['mobile'],
            'email' => $request['email'],
            'nation' => $request['nation'],
            'semester' => $request['semester'],
            'class' => $request['class'],
            'ex_school' => $request['ex_school'],
            'arabic_ex_school' => $request['arabic_ex_school'],
            'enter_date' => $request['enter_date'],
            'father_account' => $request['father_account'],
            'mother_account' => $request['mother_account'],
            'image' => $imageSave,
            'reports' => $request['reports'],
            'login' => $request['login'],
            'welcome' => $request['welcome'],
        ]);
         return redirect('students');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $students = Students::findOrFail($id);
        $genders=Genders::all();
        $nations=Nations::all();
        $classes=Classes::all();
        $semesters=Semesters::all();
        $enteryears=Enteryears::all();
        return view('panel.edit_students')->with('students',$students)->with('genders',$genders)->with('nations',$nations)->with('classes',$classes)->with('semesters',$semesters)->with('enteryears',$enteryears);
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

    $students = Students::find($id);
    $students->id_num = $request->id_num;
    $students->passport = $request->passport;
    $students->file = $request->file;
    $students->enter_year = $request->enter_year;
    $students->name = $request->name;
    $students->username = $request->username;
    if(!empty($request['password'])){
    $students->password = Hash::make($request['password']);    
    }
    $students->first_name = $request->first_name;
    $students->father_name = $request->father_name;
    $students->grandfather_name = $request->grandfather_name;
    $students->family_name = $request->family_name;
    $students->arabic_name = $request->arabic_name;
    $students->gender = $request->gender;
    $students->born_date = $request->born_date;
    $students->born_place = $request->born_place;
    $students->arabic_born_place = $request->arabic_born_place;
    $students->adress = $request->adress;
    $students->phone = $request->phone;
    $students->mobile = $request->mobile;
    $students->email = $request->email;
    $students->nation = $request->nation;
    $students->semester = $request->semester;
    $students->class = $request->class;
    $students->ex_school = $request->ex_school;
    $students->arabic_ex_school = $request->arabic_ex_school;
    $students->enter_date = $request->enter_date;
    $students->father_account = $request->father_account;
    $students->mother_account = $request->mother_account;
    $students->image = $imageSave;
    $students->reports = $request->reports;
    $students->login = $request->login;
    $students->welcome = $request->welcome;
    $students->update();

    return redirect('students');
    }

    public function destroy($id)
    {
        $students = Students::findOrFail($id);
    $students->delete();

    return redirect('students');
    }

    public function WithoutClass()
    {
        $students=Students::where('class', '=',0)->get();
       
        return view('panel.students-without-section')->with('students',$students);
    }
}
