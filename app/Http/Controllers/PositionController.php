<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Position;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ORM
        $position = Position::all();

        return view('position.home',[
            'data' => $position,
            'title' => "Position",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('position.create',[
            'title' => "Insert Position",
            'department' => $department,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Position::create([
            'name' => $request->name,
            'code' => $request->code,
            'department_id' => $request->department_id,
        ]);
        return redirect('/position');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $position = Position::find($id);
        $department = Department::all();
        return view('position.edit',[
            'title' => "Insert Position",
            'data' => $position,
            'department' => $department,
        ]);
    }

    public function update(Request $request)
    {
        Position::where('id','=',$request->id)
            ->update([
                'name' => $request->name,
                'code' => $request->code,
                'department_id' => $request->department_id,
            ]);
        return redirect('/position');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = position::find($id);
        $data->delete();

        return redirect('/position');
    }
}
