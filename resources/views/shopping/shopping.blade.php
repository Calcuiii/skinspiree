@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ $pageTitle }}</h1>
        <form action="{{ route('shopping.buy') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="product_id" class="form-label">Pilih Produk</label>
                <select name="product_id" id="product_id" class="form-select" required>
                    <option value="" selected disabled>Pilih produk...</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} - Rp{{ number_format($product->price, 0, ',', '.') }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Jumlah</label>
                <input type="number" name="quantity" id="quantity" class="form-control" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Beli</button>
        </form>
    </div>
@endsection
