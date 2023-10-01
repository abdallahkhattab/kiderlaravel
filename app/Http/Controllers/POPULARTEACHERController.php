<?php

namespace App\Http\Controllers;

use App\Models\POPULARTEACHER;
use Illuminate\Http\Request;

class POPULARTEACHERController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $teachers = POPULARTEACHER::get()->all();
        return view('admin.PopularTeacher.PopularTeacher',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( Request $request )
    {
        //
        
        


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $file = $request->file('teacher_image');
        $fileNameteacher = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images/teacher', $fileNameteacher);

      

        $PopularTeacherData =
        [
            'page_title'=>$request->page_title,
            'page_description'=>$request->description,
            'teacher_name'=>$request->teacher_name,
            'teacher_job'=>$request->teacher_job,
            'teacher_facebook'=>$request->teacher_facebook,
            'teacher_image'=> $fileNameteacher,
        ];

     // return  dd($PopularTeacherData);
        POPULARTEACHER::create($PopularTeacherData);
        return redirect()->route('dashoboard.popularteacher.index')->with('message','school class addedd succesfully ');



    }

    /**
     * Display the specified resource.
     */
    public function show(POPULARTEACHER $pOPULARTEACHER)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(POPULARTEACHER $pOPULARTEACHER)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, POPULARTEACHER $pOPULARTEACHER)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        POPULARTEACHER::destroy($id);

        return redirect()->route('dashoboard.popularteacher.index');


    }
}
