<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Admins;
use App\Genders;
use App\Nations;
use App\Groups;
use App\Schools;

class AdminController extends Controller
{
    public function index()
    {
        $admins=Admins::all();
       
        return view('panel.admins')->with('admins',$admins);
    }

    public function create()
    {
        $genders=Genders::all();
        $nations=Nations::all();
        $schools=Schools::all();
        $groups=Groups::all();
        return view('panel.add_admins')->with('genders',$genders)->with('nations',$nations)->with('schools',$schools)->with('groups',$groups);
    }

    public function store(Request $request)
    {
       $request->validate([
    'id_num' => 'required|max:255',
    'name' => 'required',
]);

         Admins::create([
            'id_num' => $request['id_num'],
            'name' => $request['name'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'group' => $request['group'],
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
            'school' => $request['school'],
        ]);
         return redirect('admins');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $admins = Admins::findOrFail($id);
        $genders=Genders::all();
        $nations=Nations::all();
        $schools=Schools::all();
        $groups=Groups::all();
        return view('panel.edit_admins')->with('admins',$admins)->with('genders',$genders)->with('nations',$nations)->with('schools',$schools)->with('groups',$groups);
    }
    public function update(Request $request, $id)
    {
       
    $admins = Admins::find($id);
    $admins->id_num = $request->id_num;
    $admins->name = $request->name;
    $admins->username = $request->username;
    if(!empty($request['password'])){
    $admins->password = Hash::make($request['password']);    
    }
    $admins->group = $request->group;
    $admins->first_name = $request->first_name;
    $admins->father_name = $request->father_name;
    $admins->grandfather_name = $request->grandfather_name;
    $admins->family_name = $request->family_name;
    $admins->arabic_name = $request->arabic_name;
    $admins->gender = $request->gender;
    $admins->born_date = $request->born_date;
    $admins->born_place = $request->born_place;
    $admins->adress = $request->adress;
    $admins->phone = $request->phone;
    $admins->mobile = $request->mobile;
    $admins->email = $request->email;
    $admins->nation = $request->nation;
	$admins->login = $request->login;
	$admins->school = $request->school;
    $admins->update();

    return redirect('admins');
    }

    public function destroy($id)
    {
        $admins = Admins::findOrFail($id);
    $admins->delete();

    return redirect('admins');
    }
}
