<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use DB;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('items/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('itemlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data = Item::create($request->all());
        $request->validate([
            'name'=>'required',
            'quantiy'=>'required',
            'price'=>'required',
            'image'=>'required'
        ]);
        $item = new Item([
            'name' => $request->get('name'),
            'quantiy' => $request->get('quantiy'),
            'price' => $request->get('price'),
            'image' => $request->get('image')
        ]);
        $contact->save();
        return redirect('/itemlist')->with('success', 'item saved!');

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
        $item = Item::find($id);
        return view('items.edit', compact('item'));
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
            'name'=>'required',
            'quantiy'=>'required',
            'price'=>'required',
            'image'=>'required'
        ]);
        $item = Item::find($id);
        $item->id = $request->get('id');
            $item->name = $request->get('name');
            $item->quantiy = $request->get('quantiy');
            $item->price = $request->get('price');
            $item->image = $request->get('image');
             $item->save();
        return redirect('/itemlist')->with('success', 'item updated!');
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
