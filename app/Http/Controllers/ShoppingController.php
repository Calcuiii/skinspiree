<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ShoppingController extends Controller
{
    public function shopping()
    {
        $pageTitle = 'Shopping';
        $products = Product::where('stock', '>', 0)->get();
        return view('shopping.index', compact('pageTitle', 'products'));
    }

    public function buy(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::find($request->product_id);

        if ($product->stock < $request->quantity) {
            return redirect()->back()->withErrors(['error' => 'Stok produk tidak mencukupi.']);
        }

        // Simpan data pembelian
        $order = Order::create([
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'total_price' => $product->price * $request->quantity,
        ]);

        // Kurangi stok produk
        $product->stock -= $request->quantity;
        $product->save();

        return redirect()->route('shopping.receipt', ['id' => $order->id]);
    }

    public function generateReceipt($id)
    {
        $order = Order::findOrFail($id);
        $pdf = PDF::loadView('shopping.receipt', compact('order'));
        return $pdf->download('receipt.pdf');
    }
}

