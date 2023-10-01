<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $classData = SchoolClass::orderby('id','desc')->paginate(5);
        return view('admin.ClassManagement.classMangemnet',compact('classData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    	// handle fetch all eamployees ajax request
        public function fetchAll()
        {
        }
                



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        $file = $request->file('class_image');
        $fileNameclass = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images/class', $fileNameclass);
    
        $file = $request->file('class_teacher_image');
        $fileNameclassteacher = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images/teacher', $fileNameclassteacher);
    
        // Create class data array
        $classData = [
            'class_page_title' => $request->teto,
            'class_page_description' => $request->class_page_description,
            'class_title' => $request->class_title,
            'class_teacher_name' => $request->class_teacher_name,
            'class_teacher_description' => $request->tea,
            'class_teacher_image' => $fileNameclassteacher,
            'class_price' => $request->class_price,
            'class_time' => $request->class_time,
            'class_age' => $request->class_age,
            'class_capacity' => $request->class_capacity,
            'class_image' => $fileNameclass,
        ];

SchoolClass::create($classData);

return redirect()->route('dashoboard.class')->with('message','school class addedd succesfully ');
    
    }

 


	


    /**
     * Display the specified resource.
     */
    public function show(SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        SchoolClass::destroy($id);

        session()->flash('message', 'Class deleted successfully.');

        // Redirect to the index or wherever you want
        return redirect()->route('dashoboard.class');
    
    }
}
