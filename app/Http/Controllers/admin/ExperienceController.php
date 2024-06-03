<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Listes = Experience::orderBy('id', 'desc')->paginate(6);
       
        return view ('admin.experience.index', [
            'Listes' =>$Listes 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       

        $validate = Validator::make($request->all(),[
            'post'=> 'required|string|min:5',
            'entreprise'=> 'required|string|min:5',
            'description'=> 'required|string|min:5',
            'periode'=> 'required|string',
        ]);
            if($validate->fails()){
                return response()->json(['errors' => $validate->errors()], 422);
            }

        $create = new Experience ();
        $create->post = $request->input('post');
        $create->entreprise = $request->input('entreprise');
        $create->description = $request->input('description');
        $create->periode = $request->input('periode');
        $create->save();

        return to_route('admin.experience.index')->with([
            'sucess'=> 'Vous avez ajouter une bouvelle experience'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $experience = Experience::find($id);

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
