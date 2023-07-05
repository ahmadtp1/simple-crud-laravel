<?php

namespace App\Http\Controllers;

use App\Models\pembeli;
use Illuminate\Http\Request;

class pembelicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembeli.index')->with([
            'pembeli'=> pembeli::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idpembeli' => 'required|min:3|max:9',
            'nama' => 'required|min:3',
            'harga' => 'required|min:3',
            'produk' => 'required|min:3',
        ]);

        $pembeli = new pembeli;
        $pembeli->idpembeli = $request->idpembeli;
        
        $pembeli->nama = $request->nama;
        
        $pembeli->harga = $request->harga;
        
        $pembeli->produk = $request->produk;
        $pembeli->save();

        return to_route('pembeli.index')->with('succes', 'data ditambah'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        return view('pembeli.edit')->with([
            'pembeli'=>pembeli::find($id),
        ]);
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
        $request->validate([
            'idpembeli' => 'required|min:3|max:9',
            'nama' => 'required|min:3',
            'harga' => 'required|min:3',
            'produk' => 'required|min:3',
        ]);

        $pembeli = pembeli::find($id);
        $pembeli->idpembeli = $request->idpembeli;
        
        $pembeli->nama = $request->nama;
        
        $pembeli->harga = $request->harga;
        
        $pembeli->produk = $request->produk;
        $pembeli->save();

        return to_route('pembeli.index')->with('succes', 'data ditambah'); 
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = pembeli::find($id);
        $pembeli->delete();

        return back()->with('succes', 'data dihapus');
    }
}
