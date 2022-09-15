<?php

namespace App\Http\Controllers;

use App\Models\Kamion;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Parser\Inline\AutolinkParser;

class KamionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Kamion::all();
        return view('kamion.index')->with('rez',$a);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'regBr'=>'required',
            'godiste'=>'required',
            'cena'=>'required',
            'model'=>'required',
            'opis'=>'required',
            'gorivo'=>'required',
     ]);

        $r = new Kamion();
        $r->regBr = $request->input('regBr');
        $r->gorivo = $request->input('gorivo');
        $r->cena = $request->input('cena');
        $r->opis = $request->input('opis');
        $r->godiste = $request->input('godiste');
        $r->model = $request->input('model');
        $r->save();

        return redirect('/kamion')->with('success','Kamion je uspesno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $a = Kamion::find($id);
        return view('kamion.show')->with('r',$a);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Kamion::find($id);
        return view('kamion.edit')->with('rez',$a);
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
        $r = Kamion::find($id);
        $r->regBr = $request->input('regBr');
        $r->gorivo = $request->input('gorivo');
        $r->cena = $request->input('cena');
        $r->opis = $request->input('opis');
        $r->godiste = $request->input('godiste');
        $r->model = $request->input('model');
        $r->save();

        return redirect('/kamion')->with('success','Kamion je uspesno kreiran!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Kamion::find($id);
        $a->delete();
        return redirect('/kamion')->with('success','Kamion je uspesno izbrisan!');
    }
}
