<?php

namespace Reservations\Http\Controllers;

use Illuminate\Http\Request;
use Reservations\Http\Requests;
use Reservations\Http\Controllers\Controller;
use Illuminate\Support\Farcades\Session;
use Illuminate\Support\Farcades\Redirect;
use Reservations\Professional;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $professionals = Professional::All();
        return view('professional.index',compact('professionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('professional.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Professional::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'phone_number' => $request['phone_number'],
            'address' => $request['address'],
        ]);

        return redirect('/professionals')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $professional = Professional::find($id);
        return view('professional.edit',['professional'=>$professional]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $professional = Professional::find($id);
        $professional->fill($request->all());
        $professional->save();
        Session::flash('message','Usuario editado correctamente');
        return redirect('/professionals')->with('message','store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
