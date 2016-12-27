<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Subjects;
use App\Sciences;
use Session;

class SubjectsController extends Controller
{

    public function __construct()
       {
           $this->middleware('auth');
       }

    public function index()
    {
        $movzular =  Subjects::with('fenni')->orderBy('subject_id','desc')->get();
        return view('admin.Subjects.index',compact('movzular'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fennler = Sciences::all();
        return view('admin.Subjects.add',compact('fennler'));
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
          'subject_name' => 'required',
          'subject_science_id' => 'required'
        ]);

        Subjects::create([
            'subject_name' => $request['subject_name'],
            'subject_science_id' => $request['subject_science_id'],
        ]);

        Session::flash('mesaj', 'Yeni mövzu əlavə edildi!');
        return redirect()->route('movzular.index');
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
      $movzu = Subjects::with('fenni')->findOrFail($id);
      $fennler = Sciences::all();

      return view('admin.Subjects.edit',compact('movzu','fennler'));
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
      $movzu = Subjects::findOrFail($id);

      $this->validate($request, [
        'subject_name' => 'required',
        'subject_science_id' => 'required'
      ]);

      $input = $request->all();
      $movzu->fill($input)->save();

      Session::flash('mesaj', 'Redaktə edildi!');
      return redirect()->route('movzular.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $movzu = Subjects::where('subject_id', $id);
      $movzu->delete();
      Session::flash('mesaj', 'Mövzu Silindi!');
      return redirect()->route('movzular.index');
    }
}
