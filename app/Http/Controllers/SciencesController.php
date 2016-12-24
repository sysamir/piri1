<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;
use App\Sciences;
use Session;

class SciencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $science = Sciences::orderBy('science_id', 'desc')->get();

      // foreach ($science as $key) {
      //     $groupDestr = Group::where('group_id', $key->science_groups_id);
      //     foreach ($groupDestr as $key2) {
      //       dd($key2->group_name);
      //     }
      // }



      return view('admin.Sciences.index',compact('science'));
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
          'groups_id' => 'required'
        ]);

        $grp_ids = implode(",",$request->groups_id);

        Sciences::create([
            'science_name' => $request['science_name'],
            'science_groups_id' => $grp_ids
        ]);

        Session::flash('mesaj', 'Yeni fənn əlavə edildi!');
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
