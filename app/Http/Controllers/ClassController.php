<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Classes;
class ClassController extends Controller
{
   public function index()
    {
        $classes=Classes::all();
       
        return view('panel.classes')->with('classes',$classes);
    }

    public function create()
    {
        
        return view('panel.add_classes');
    }

    public function store(Request $request)
    {

         Classes::create([
            'id_num' => $request['id_num'],
            'name' => $request['name'],
        ]);
         return redirect('classes');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $classes = Classes::findOrFail($id);

        return view('panel.edit_classes')->with('classes',$classes);
    }

    public function update(Request $request, $id)
    {

    $classes = Classes::find($id);
    $classes->name = $request->name;
    $classes->update();

    return redirect('classes');
    }

    public function destroy($id)
    {
        $classes = Classes::findOrFail($id);
    $classes->delete();

    return redirect('classes');
    }
}
