<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;
use App\Sciences;
use Session;
use App\GS_relations;
use DB;

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
          'science_name' => 'required',
          'gs_group_id' => 'required'
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
      // DB::enableQueryLog();
      $fenn = Sciences::with('qruplari')->findOrFail($id);
      // dd(DB::getQueryLog());
      $gr = Group::all();

      return view('admin.Sciences.edit',compact('fenn','gr'));
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
      $this->validate($request, [
        'science_name' => 'required',
        'gs_group_id' => 'required'
      ]);

      $science = Sciences::where('science_id', $id)->first();

      $science->fill($request->all())->save();

      $science->qruplari()->sync($request['gs_group_id']);

      Session::flash('mesaj', 'Redaktə edildi!');
      return redirect()->route('fenler.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $science = Sciences::where('science_id', $id)->first();
      $science->qruplari()->detach();
      $science->delete();
      Session::flash('mesaj', 'Silindi!');
      return redirect()->route('fenler.index');
    }
}
