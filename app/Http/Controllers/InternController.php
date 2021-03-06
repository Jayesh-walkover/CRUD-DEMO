<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;
use App\Http\Requests\StoreInternRequest;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @group Intern Management
     */
    public function index()
    {
        $interns = Intern::all();
        return view('Dashboard', compact('interns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * @group Intern Management
     */
    public function create()
    {
        return view('Create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @group Intern Management
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInternRequest $request)
    {
        $intern = Intern::create([
            'first_name' => $request->get('first_name'),
            'last_name'  => $request->get('last_name'),
        ]);
        return redirect('/intern')->with('status', 'Added Successfully');
    }

   
    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @group Intern Management
     * @hideFromAPIDocumentation
     */
    public function edit($id)
    {
        $intern= Intern::find($id);
        return view('Update', ['data' => $intern , 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @group Intern Management
     * @return \Illuminate\Http\Response
     * @urlParam id integer required The ID of the post.
     */
    public function update(Request $request, $id)
    {   
        $this->validate($request , [
            'first_name'  => 'required',
            'last_name'   => 'required'
        ]);
        $intern= Intern::find($id);
        $intern->first_name = $request->first_name;
        $intern->last_name = $request->last_name;
        $intern->save();
        return redirect('/intern')->with('status' , 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @group Intern Management
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $intern= Intern::find($id);
        $intern->delete();
        return redirect('/intern')->with('status' , 'Record Deleted');
    }

}
