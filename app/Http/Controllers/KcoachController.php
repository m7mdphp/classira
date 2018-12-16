<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Kcoachs;
use App\Genders;
use App\Nations;

class KcoachController extends Controller
{
    public function index()
    {
        $kcoachs=Kcoachs::all();
       
        return view('panel.kcoachs')->with('kcoachs',$kcoachs);
    }

    public function create()
    {
        $genders=Genders::all();
        $nations=Nations::all();
        return view('panel.add_kcoachs')->with('genders',$genders)->with('nations',$nations);
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

         Kcoachs::create([
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
         return redirect('kcoachs');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kcoachs = Kcoachs::findOrFail($id);
        $genders=Genders::all();
        $nations=Nations::all();

        return view('panel.edit_kcoachs')->with('kcoachs',$kcoachs)->with('genders',$genders)->with('nations',$nations);
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

    $kcoachs = Kcoachs::find($id);
    $kcoachs->id_num = $request->id_num;
    $kcoachs->name = $request->name;
    $kcoachs->username = $request->username;
    if(!empty($request['password'])){
    $kcoachs->password = Hash::make($request['password']);    
    }
    $kcoachs->first_name = $request->first_name;
    $kcoachs->father_name = $request->father_name;
    $kcoachs->grandfather_name = $request->grandfather_name;
    $kcoachs->family_name = $request->family_name;
    $kcoachs->gender = $request->gender;
    $kcoachs->born_date = $request->born_date;
    $kcoachs->born_place = $request->born_place;
    $kcoachs->adress = $request->adress;
    $kcoachs->phone = $request->phone;
    $kcoachs->mobile = $request->mobile;
    $kcoachs->email = $request->email;
    $kcoachs->section = $request->section;
    $kcoachs->nation = $request->nation;
    $kcoachs->image = $imageSave;
    $kcoachs->update();

    return redirect('kcoachs');
    }

    public function destroy($id)
    {
        $kcoachs = Kcoachs::findOrFail($id);
    $kcoachs->delete();

    return redirect('kcoachs');
    }
}
