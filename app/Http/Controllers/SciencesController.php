<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;
use App\Sciences;
use Session;
use App\GS_relations;

class SciencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

    $fenler =  Sciences::with('qruplari')->orderBy('science_id','desc')->get();

    return view('admin.Sciences.index',compact('fenler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group = Group::orderBy('group_id', 'desc')->get();

        return view('admin.Sciences.add',compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'science_name' => 'required'
        ]);


        $science_id = Sciences::create([
            'science_name' => $request['science_name']
        ])->science_id;

        $science = Sciences::where('science_id', $science_id)->first();

        $science->qruplari()->attach($request['gs_group_id']);

        Session::flash('mesaj', 'Yeni fənn əlavə edildi! (id: '.$science_id.')');
        return redirect()->route('fenler.index');

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
