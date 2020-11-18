<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductTypePacking;

class ProductTypePackingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data=ProductTypePacking::where('product_id',$id)->get();
        return view('type-packings.index',compact('data','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id)
    {
        $array=[];
        return view('type-packings.edit-add',compact('product_id','array'));
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
            'name'=>'required',
            'quantity'=>'required'
        ]);
        $items=[
            'name'=>$request->name,
            'quantity'=>$request->quantity,
            'product_id'=>$request->product_id,
        ];
        $id=$request->product_id;
        ProductTypePacking::create($items);
        return redirect()->route('packings.index',compact('id'))->with(
            [
                'message'=>__('voyager::generic.successfully_added_new'),
                'alert-type'=>'success'
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=ProductTypePacking::findOrFail($id);
        return view('type-packings.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $array=ProductTypePacking::findOrFail($id);
        $product_id=$array->product_id;

        return view('type-packings.edit-add',compact('array','product_id'));
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
        // dd($request->all());
        // return $id;
        // exit;
        $request->validate([
            'name'=>'required',
            'quantity'=>'required'
        ]);
        $update_id=ProductTypePacking::findOrFail($id);
        $update_items=[
            'name'=>$request->name,
            'quantity'=>$request->quantity,

        ];
        $id=$request->product_id;
        $update_id->update($update_items);

        return redirect()->route('packings.index',compact('id'))->with(
            [
                'message'=>__('voyager::generic.successfully_updated'),
                'alert-type'=>'success'
            ]
        );   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductTypePacking::findOrFail($id)->delete();
        return redirect()->back()->with(
            [
                'message'=>__('voyager::generic.successfully_deleted'),
                'alert-type'=>'success'
            ]
        );   
    }
}
