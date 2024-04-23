<?php

namespace App\Http\Controllers\Apps\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Validator;
class OrderController extends Controller
{
    /**
     * Get Order Details a listing of the resource.
     */
    public function getOrderDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',


        ]);

        if($validator->fails()){
            return array('message'=>$validator->errors()->first(),'type'=>'error');

        }
        $order = Order::with('items.product')->find($request->id);
        return array('data'=>$order,'type'=>'success');
        try {
        } catch (\Throwable $th) {
            return array('message'=>"Something Went wrong",'type'=>'error');
        }


    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Order::orderBy('created_at','DESC')->paginate(150);
        return view('admin.order-management.order.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
