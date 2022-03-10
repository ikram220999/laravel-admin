<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::paginate();

        return OrderResource::collection($order);
    }

    public function show($id)
    {
        $order = Order::find($id);

        return new OrderResource($order);
    }
}
