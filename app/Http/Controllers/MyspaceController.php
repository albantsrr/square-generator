<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyspaceRequest;
use App\Models\Qrcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MyspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countqr = DB::table('qrcodes')->count();
        $currentuser = Auth::user();
        $qrcode = Qrcode::all();

        return view('myspace.index', [
            'countqr' => $countqr,
            'currentuser' => $currentuser
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $qrcode = Qrcode::all();
        $qrcode->user_id = Auth::id();


        return view('myspace.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MyspaceRequest $request)
    {
        $validated = $request->validated();

        Qrcode::create([
            'name' => $request->input('name'),
            'url' => $request->input('url')
        ]);
        return redirect()->route('myspace')->with('success', "The Qr code has been saved");

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
    public function edit(Qrcode $qrcode)
    {
        return view('myspace.edit',[
            'qrcode' => $qrcode
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MyspaceRequest $request, Qrcode $qrcode)
    {
        $qrcode->name = $request->input('name');
        $qrcode->url = $request->input('url');
        $qrcode->save();
        return redirect()->route('myspace.index')->with('warning', "The Qr code has been modified");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qrcode $qrcode)
    {
        $qrcode->delete();
        return redirect()->route('myspace.index')->with('danger', "The Qr code has been removed");
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */

}
