<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyspaceRequest;
use App\Models\Qrcode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode as Qr;

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
        return view('myspace.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MyspaceRequest $request, Qrcode $qrcode)
    {
        $currentuser = Auth::user();

        $userid = $currentuser->id;
        $url = $request->input('url');
        $name =  $request->input('name');
        Storage::disk('local')->put("qrcodes/$userid-$name.png",  Qr::format('png')->size(200)->generate($url));

        $validated = $request->validated();

        Qrcode::create([
            'url' => $url,
            'name' => $name,
            'qrcode' => $qrcode
        ]);
        return redirect()->route('myspace.index')->with('success', "The Qr code has been created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userid = Auth::user()->id;

       $dl = Qrcode::find($id);

       $dlname = $dl->name;

        return Storage::download("qrcodes/$userid-$dlname.png", "Your download");



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
