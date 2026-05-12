<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{

    // =========================
    // SHOW ALL ACTIVE ORDERS
    // =========================
    public function index()
    {

        $orders = Order::where('is_deleted', false)

        ->when(request('invoice_number'), function($query){

            $query->where(
                'invoice_number',
                'like',
                '%' . request('invoice_number') . '%'
            );

        })

        ->when(request('status'), function($query){

            $query->where(
                'status',
                request('status')
            );

        })

        ->get();

        return view('orders.index', compact('orders'));

    }

    // =========================
    // CREATE VIEW
    // =========================
    public function create()
    {

        return view('orders.create');

    }

    // =========================
    // STORE NEW ORDER
    // =========================
    public function store(Request $request)
    {

        Order::create([

            'invoice_number' => $request->invoice_number,
            'customer_name' => $request->customer_name,
            'customer_number' => $request->customer_number,
            'status' => 'Ordered',
            'notes' => $request->notes,
            'is_deleted' => false

        ]);

        return redirect('/orders')->with(
            'success',
            'Order created successfully'
        );

    }

    // =========================
    // EDIT VIEW
    // =========================
    public function edit(Order $order)
    {

        return view('orders.edit', compact('order'));

    }

    // =========================
    // UPDATE ORDER
    // =========================
    public function update(Request $request, Order $order)
    {

        $order->update([

            'invoice_number' => $request->invoice_number,
            'customer_name' => $request->customer_name,
            'customer_number' => $request->customer_number,
            'status' => $request->status,
            'notes' => $request->notes

        ]);

        return redirect('/orders')->with(
            'success',
            'Order updated successfully'
        );

    }

    // =========================
    // LOGICAL DELETE
    // =========================
    public function destroy(Order $order)
    {

        $order->update([
            'is_deleted' => true
        ]);

        return redirect('/orders')->with(
            'success',
            'Order archived successfully'
        );

    }

    // =========================
    // SHOW ARCHIVED ORDERS
    // =========================
    public function archived()
    {

        $orders = Order::where(
            'is_deleted',
            true
        )->get();

        return view(
            'orders.archived',
            compact('orders')
        );

    }

    // =========================
    // RESTORE ARCHIVED ORDER
    // =========================
    public function restore($id)
    {

        $order = Order::find($id);

        $order->update([
            'is_deleted' => false
        ]);

        return redirect('/archived-orders')->with(
            'success',
            'Order restored successfully'
        );

    }

}