<?php

namespace App\Http\Controllers;

use App\Student;
use App\ Rules\FullName;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    { $showall=Student::all();
        
        return view('layout.single', compact('showall'));
        
    }


    public function index2()


    { $showall=Student::all();
        
        return view('layout.dashboard', compact('showall'));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $request)
    {
        $request->validate([
            'name' => ['required',new FullName()],
            'NID'       => 'required|digits:10|numeric
            ',
            'address'   => 'required',
            'email'     =>'required|email',
            'mobile'     =>'required|numeric

            ',
            'image'     =>'mimes:jpeg,jpg,png,gif|required|max:10000'

        ]);

        
    }

    /**
     * Store a newly created resource in storage.

     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
  
   {  $this->create($request);
      
    
    




    if ($request->hasFile('image')) {
        $file = $request->file('image') ;
        $ext = $file->getClientOriginalExtension() ;
        $filename = "cover_Images". '_' . time() . '.' . $ext ;
        $file->move('images', $filename);
        
    }

    Student::create([
        "name"    => $request->name,
        "email"       =>$request->email,
        "mobile"       =>$request->mobile,
        "address"     =>$request->address,
        "NID"         =>$request->NID,
        "image"       =>$filename,
    ]);

       
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $show= Student::find($id);
       return view('layout.gallery',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $showall=Student::where('id',$id)->get()->first();
        return view('layout.edit',compact('showall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    { $this->create($request);
        if ($request->hasFile('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = "cover_Images". '_' . time() . '.' . $ext ;
            $file->move('images', $filename);
            
        }
        Student::where('id',$id)->update([
            "name"    => $request->name,
            "email"       =>$request->email,
            "mobile"       =>$request->mobile,
            "address"     =>$request->address,
            "NID"         =>$request->NID,
            "image"       =>$filename,
        ]);
       
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Student::where('id',$id)->delete() ;
           
           return redirect('dashboard');
    }
}
 
   
 