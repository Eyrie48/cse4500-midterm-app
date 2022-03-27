<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardwares;
use App\Models\Userinfo;

class HardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hardwares = Hardwares::all();
        return view('hardwares',compact('hardwares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hardwares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'invoice' => 'required',
            'device_name' => 'required',
            'cpu' => 'required',
            'price' => 'required',
            'purchaseDate' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'user_info' => 'required', 
            'user_name' => 'required',
            'phone_number' => 'required',
       ]);

       $hardware = Hardwares::create([ 
        'invoice' => $request->invoice,
        'device_name' => $request->device_name,
        'cpu' => $request->cpu,
        'price' => $request->price,
        'purchaseDate' => $request->date('purchaseDate'),
        'ram' => $request->ram,
        'storage' => $request->storage, 
   ]);

   return $this->index();
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
        $hardware = Hardwares::all();
        $hardware = Userinfo::with('hardware')->get();
        return view('hardwares', compact('hardware'));
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
