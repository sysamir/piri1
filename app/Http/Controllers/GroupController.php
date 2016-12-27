<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;
use Session;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
       {
           $this->middleware('auth');
       }

    public function index()
    {
        $group = Group::orderBy('group_id', 'desc')->get();

        return view('admin.Groups.index',compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Groups.add');
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
        'group_name' => 'required'
    ]);

      Group::create([
          'group_name' => $request['group_name']
      ]);

        Session::flash('mesaj', 'Yeni qrup əlavə edildi!');
        return redirect()->route('qruplar.index');

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
    public function edit($group_id)
    {
      $group = Group::findOrFail($group_id);

      return view('admin.Groups.edit',compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $group_id)
    {
        $group = Group::findOrFail($group_id);

        $this->validate($request, [
          'group_name' => 'required'
        ]);

        $input = $request->all();
        $group->fill($input)->save();

        Session::flash('mesaj', 'Redaktə edildi!');
        return redirect()->route('qruplar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($group_id)
    {

        $groupDestr = Group::where('group_id', $group_id);
        $groupDestr->delete();
        return back();
    }
}
