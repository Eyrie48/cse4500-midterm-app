<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardwares;
use App\Models\Userinfo;
use App\Models\manufacturer;

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
        $manufacturers = manufacturer::all();
        $userinfos = Userinfo::all();
        return view('hardwares',compact('hardwares', 'manufacturers', 'userinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $manufacturers = manufacturer::all();
        $userinfos = Userinfo::all();
        return view('hardwares.create', compact('manufacturers', 'userinfos'));
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
        if($request->device_name == "0")
            $request->device_name = "Desktop";
        else if($request->device_name == "1")
            $request->device_name = "Laptop";
        else if($request->device_name == "2")
            $request->device_name = "Tablet";
        else if($request->device_name == "3")
            $request->device_name = "Phone";

        $validated = $request->validate([
            'userinfo_id' => 'required',
            'manufacturer_id' => 'required',
            'invoice' => 'required',
            'device_name' => 'required',
            'cpu' => 'required',
            'price' => 'required',
            'purchaseDate' => 'required',
            'ram' => 'required',
            'storage' => 'required',

       ]);

       $hardware = Hardwares::create([ 
        'userinfo_id' => $request->userinfo_id,
        'manufacturer_id' => $request->manufacturer_id,
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
        //$hardware = Hardwares::all();
        //$hardware = Userinfo::with('hardware')->get();
        $hardware = Hardwares::find($id);
        
        return view('hardwares.show', compact('hardware'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responses
     */
    public function edit($id)
    {
        //
        $manufacturers = manufacturer::all();
        $userinfos = Userinfo::all();
        $hardware = Hardwares::find($id);
        return view('hardwares.edit', compact('hardware', 'manufacturers', 'userinfos'));
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
            if($request->device_name == "0")
            $request->device_name = "Desktop";
        else if($request->device_name == "1")
            $request->device_name = "Laptop";
        else if($request->device_name == "2")
            $request->device_name = "Tablet";
        else if($request->device_name == "3")
            $request->device_name = "Phone";

        $validated = $request->validate([
            'userinfo_id' => 'required',
            'manufacturer_id' => 'required',
            'invoice' => 'required',
            'device_name' => 'required',
            'cpu' => 'required',
            'price' => 'required',
            'purchaseDate' => 'required',
            'ram' => 'required',
            'storage' => 'required',

        ]);


        $hardware = Hardwares::where('id', $id)->update();


        $hardware([ 
            'userinfo_id' => $request->userinfo_id,
            'manufacturer_id' => $request->manufacturer_id,
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $response = Hardwares::where('id', $id)->delete();
        return $this->index();
    }
}
