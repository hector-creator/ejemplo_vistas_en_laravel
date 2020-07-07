<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControllador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("welcome");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {
        return view("inicio");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function vinilicas()
    {
      return view("vinilicas");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function industrial()
    {
return view("industrial");
    }


    public function impermeabilizantes()
    {
return view("impermeabilizantes");
    }


    public function pegamentos()
    {
  return view("pegamentos");
    }

    public function especialidades()
    {
return view("especialidades");
    }

    public function contacto()
    {
return view("contacto");
    }


    public function esmaltes()
    {
return view("esmaltes");
    }

    public function nosotros()
    {
return view("nosotros");
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
