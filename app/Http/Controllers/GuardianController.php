<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Guardians;
use App\Genders;
use App\Nations;
class GuardianController extends Controller
{
    public function index()
    {
        $guardians=Guardians::all();
       
        return view('panel.guardians')->with('guardians',$guardians);
    }

    public function create()
    {
        $genders=Genders::all();
        $nations=Nations::all();
        return view('panel.add_guardians')->with('genders',$genders)->with('nations',$nations);
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

         Guardians::create([
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
            'login' => $request['login'],
            'nation' => $request['nation'],
            'image' => $imageSave,
        ]);
         return redirect('guardians');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $guardians = Guardians::findOrFail($id);
        $genders=Genders::all();
        $nations=Nations::all();

        return view('panel.edit_guardians')->with('guardians',$guardians)->with('genders',$genders)->with('nations',$nations);
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

    $guardians = Guardians::find($id);
    $guardians->id_num = $request->id_num;
    $guardians->name = $request->name;
    $guardians->username = $request->username;
    if(!empty($request['password'])){
    $guardians->password = Hash::make($request['password']);    
    }
    $guardians->first_name = $request->first_name;
    $guardians->father_name = $request->father_name;
    $guardians->grandfather_name = $request->grandfather_name;
    $guardians->family_name = $request->family_name;
    $guardians->gender = $request->gender;
    $guardians->born_date = $request->born_date;
    $guardians->born_place = $request->born_place;
    $guardians->adress = $request->adress;
    $guardians->phone = $request->phone;
    $guardians->mobile = $request->mobile;
    $guardians->email = $request->email;
    $guardians->login = $request->login;
    $guardians->nation = $request->nation;
    $guardians->image = $imageSave;
    $guardians->update();

    return redirect('guardians');
    }

    public function destroy($id)
    {
        $guardians = Guardians::findOrFail($id);
    $guardians->delete();

    return redirect('guardians');
    }
}