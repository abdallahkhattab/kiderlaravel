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
            $classes = SchoolClass::all();
            $output = '';
        
            if ($classes->count() > 0) {
                $output .= '<table class="table table-striped table-sm text-center align-middle">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Class Image</th>
                                    <th>Title</th>
                                    <th>Teacher</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Time</th>
                                    <th>Age</th>
                                    <th>Capacity</th>
                                    <th>Class Page Title</th>
                                    <th>Class Page Description</th>
                                    <th>Teacher Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>';
        
                foreach ($classes as $class) {
                    $output .= '<tr>
                                <td>' . $class->id . '</td>
                                <td><img src="storage/images/' . $class->class_image . '" width="50" class="img-thumbnail rounded-circle"></td>
                                <td>' . $class->class_title . '</td>
                                <td>' . $class->class_teacher_name . '</td>
                                <td>' . $class->class_teacher_description . '</td>
                                <td>' . $class->class_price . '</td>
                                <td>' . $class->class_time . '</td>
                                <td>' . $class->class_age . '</td>
                                <td>' . $class->class_capacity . '</td>
                                <td>' . $class->class_page_title . '</td>
                                <td>' . $class->class_page_description . '</td>
                                <td><img src="storage/images/' . $class->class_teacher_image . '" width="50" class="img-thumbnail rounded-circle"></td>
                                <td>
                                    <a href="#" id="' . $class->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>
        
                                    <a href="#" id="' . $class->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                                </td>
                            </tr>';
                }
        
                $output .= '</tbody></table>';
                echo $output;
            } else {
                echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
            }
        }
                



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        $file = $request->file('class_image');
        $fileNameclass = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileNameclass);
    
        $file = $request->file('class_teacher_image');
        $fileNameclassteacher = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileNameclassteacher);
    
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
