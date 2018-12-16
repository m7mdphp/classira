<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Stages;

class StageController extends Controller
{
    public function index()
    {
        $stages=Stages::all();
       
        return view('panel.stages')->with('stages',$stages);
    }

    public function create()
    {
        
        return view('panel.add_stage');
    }

    public function store(Request $request)
    {

         Stages::create([
            'id_num' => $request['id_num'],
            'stage' => $request['stage'],
            'arabic' => $request['arabic'],
            'title' => $request['title'],
        ]);
         return redirect('stages');
    }

    public function show($id)
    {
         $stages = Stages::findOrFail($id);

        return view('panel.stage')->with('stages',$stages);
    }

    public function edit($id)
    {
        $stages = Stages::findOrFail($id);

        return view('panel.edit_stage')->with('stages',$stages);
    }

    public function update(Request $request, $id)
    {

    $stages = Stages::find($id);
    $stages->stage = $request->stage;
    $stages->arabic = $request->arabic;
    $stages->title = $request->title;
    $stages->update();

    return redirect('stages');
    }

    public function destroy($id)
    {
        $stages = Stages::findOrFail($id);
    $stages->delete();

    return redirect('stages');
    }
}
