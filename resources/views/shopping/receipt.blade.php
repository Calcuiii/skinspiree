<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            padding: 20px;
        }

        .receipt {
            border: 1px solid #ddd;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .receipt h1 {
            text-align: center;
        }

        .receipt table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .receipt table, .receipt th, .receipt td {
            border: 1px solid #ddd;
        }

        .receipt th, .receipt td {
            padding: 8px;
            text-align: left;
        }

        .receipt .total {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="receipt">
        <h1>Receipt</h1>
        <p><strong>Order ID:</strong> {{ $order->id }}</p>
        <p><strong>Product:</strong> {{ $order->product->name }}</p>
        <p><strong>Price:</strong> Rp{{ number_format($order->product->price, 0, ',', '.') }}</p>
        <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
        <p class="total"><strong>Total Price:</strong> Rp{{ number_format($order->total_price, 0, ',', '.') }}</p>
    </div>
</body>

</html>
