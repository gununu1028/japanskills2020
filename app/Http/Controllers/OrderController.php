<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $shop_id)
    {
        try {
            $form = $request->all();
            $order = DB::transaction(function () use ($form) {
                foreach ($form['items'] as $item) {
                    $i = new OrderItem();
                    $param = [
                        'item_id' => $item['id'],
                        'quantity' => $item['quantity']
                    ];
                    $i->fill($param)->save();
                }
                unset($form['items']);
                $o = new Order();
                $o->fill($form)->save();
                return $o;
            });
            return response(['id' => $order->id], 201);
        } catch (\Throwable $th) {
            return response(['message' => 'Bad Request'], 400);
        }
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
