<?php

namespace App\Http\Controllers;

use App\Models\TESTEMONIAL;
use Illuminate\Http\Request;

class TestemonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

<<<<<<< HEAD
        $tetemonials = TESTEMONIAL::paginate(1);
        return view('admin.testemonial.testemonial ', compact('tetemonials'));
=======
        // Fetch the testemonial data from the database
        $testemonialdata = Testemonial::all();

        // Pass the data to the view
        return view('admin.testemonial.testemonial', compact('testemonialdata'));
>>>>>>> origin/master
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

          $file = $request->file('client_image');
          $fileNametestemonial = time() . '.' . $file->getClientOriginalExtension();
          $file->storeAs('public/images/testemonial/', $fileNametestemonial);
  
        $testemonialdata=[
            'page_title'=>$request->page_title,
            'page_description'=>$request->page_description,
            'client_name'=>$request->client_name,
            'client_job'=>$request->client_job,
            'client_image'=>$fileNametestemonial,
            'client_comment'=>$request->client_comment,
        ];

        TESTEMONIAL::create($testemonialdata);
        return redirect()->route('dashoboard.testemonial.index')->with('message','school class addedd succesfully ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
<<<<<<< HEAD
=======

        TESTEMONIAL::destroy($id);

        session()->flash('message', 'testemonial deleted successfully.');

        // Redirect to the index or wherever you want
        return redirect()->route('dashoboard.testemonial.index');


>>>>>>> origin/master
    }
}
