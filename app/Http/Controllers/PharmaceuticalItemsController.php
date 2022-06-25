<?php

namespace App\Http\Controllers;

use App\Models\PharmaceuticalItems;
use App\Http\Requests\StorePharmaceuticalItemsRequest;
use App\Http\Requests\UpdatePharmaceuticalItemsRequest;
use Illuminate\Http\Request;
use Session;

class PharmaceuticalItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePharmaceuticalItemsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePharmaceuticalItemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PharmaceuticalItems  $pharmaceuticalItems
     * @return \Illuminate\Http\Response
     */
    public function show(PharmaceuticalItems $pharmaceuticalItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PharmaceuticalItems  $pharmaceuticalItems
     * @return \Illuminate\Http\Response
     */
    public function edit(PharmaceuticalItems $pharmaceuticalItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePharmaceuticalItemsRequest  $request
     * @param  \App\Models\PharmaceuticalItems  $pharmaceuticalItems
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePharmaceuticalItemsRequest $request, PharmaceuticalItems $pharmaceuticalItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PharmaceuticalItems  $pharmaceuticalItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(PharmaceuticalItems $pharmaceuticalItems)
    {
        //
    }
    public function pharmaceuticalItems()
    {
        return view('doctors.pharmaceuticalItems');
    }
    public function pharmaceuticalItemsSubmit(Request $request)
    {
        $validate = $request->validate([
            'itemName' => 'required|max:255',
            'price' => 'required|numeric',
        ]);
        $pharmaceutical_items = new PharmaceuticalItems();
        $pharmaceutical_items->userID = Session::get('ID');
        $pharmaceutical_items->itemName = $request->itemName;
        $pharmaceutical_items->price = $request->price;
        $pharmaceutical_items->save();
        return redirect()->route('homeDoctor');
    }
}
