<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Norm;
class NormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data=Norm::where('product_id',$id)->get();
        return view('norms.index',compact('data','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id)
    {
        $array=[];
        $posts = Post::where('type','=','article')->get();
        return view('norms.edit-add',compact('product_id','array','posts'));
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
            'norm'=>'required',
            'pests'=>'required',
            'use'=>'required',
            'oj_krat'=>'required',
            'mex_ruch'=>'required'

        ]);
        $post_id= $request->post_id;
        $items=[
            'norm'=>$request->norm,
            'post_id'=>$post_id,
            'pests'=>$request->pests,
            'use'=>$request->use,
            'oj_krat'=>$request->oj_krat,
            'mex_ruch'=>$request->mex_ruch,
            'product_id'=>$request->product_id


        ];
        $id=$request->product_id;
        Norm::create($items);
        return redirect()->route('norms.index',compact('id'))->with(
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
        $item=Norm::findOrFail($id);
        return view('norms.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $array=Norm::findOrFail($id);
        $product_id=$array->product_id;
        $posts = Post::where('type','=','article')->get();

        return view('norms.edit-add',compact('array','product_id','posts'));
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
            'norm'=>'required',
            'pests'=>'required',
            'use'=>'required',
            'oj_krat'=>'required',
            'mex_ruch'=>'required'

        ]);
        $post_id = $request->post_id;

        $update_id=Norm::findOrFail($id);
        $update_items=[
            'norm'=>$request->norm,
            'post_id'=>$post_id,
            'pests'=>$request->pests,
            'use'=>$request->use,
            'oj_krat'=>$request->oj_krat,
            'mex_ruch'=>$request->mex_ruch,

        ];
        $id=$request->product_id;
        $update_id->update($update_items);

        return redirect()->route('norms.index',compact('id'))->with(
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
        Norm::findOrFail($id)->delete();
        return redirect()->back()->with(
            [
                'message'=>__('voyager::generic.successfully_deleted'),
                'alert-type'=>'success'
            ]
        );
    }
}
