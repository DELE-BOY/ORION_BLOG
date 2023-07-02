<?php

namespace App\Http\Controllers;

use App\Models\FindClass;
use Illuminate\Http\Request;

class FindClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $findClasses = FindClass::orderBy('name', 'asc')->get();
        return view('findClass.index', compact('findClasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('findClass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'name' => 'required',
            'description' => 'required',
         
        ]);
        $input = $request->all();
      
        $landmark=new FindClass();
        $landmark->fill($input);
        

        if($request->hasFile('picture')){
            $file=$request->file('picture');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('images',$filename);
            $landmark->picture=$filename;
        }
        else{
            $filename='landmark.jpg';
            $landmark->picture=$filename;
        }
        
        $landmark->save();

       

        return redirect('/find-class');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $findClass = FindClass::find($id);

        
      
        return view('findClass.show', compact('findClass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
