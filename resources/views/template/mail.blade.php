<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @php
        $total = 0;
    @endphp
    <div class="container">
        <h1>Anda telah melakukan pemesanan: </h1>
        <table class="table">
            <thead>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Qty</th>
                <th>Sub totoal</th>
            </thead>
            <tbody>
                @foreach ($carts as $cart)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cart->product->name}}</td>
                    <td>Rp.{{number_format($cart->product->price)}}</td>
                    <td>{{$cart->qty}}</td>
                    <td>Rp.{{number_format($cart->qty * $cart->product->price)}}</td>
                </tr>
                @php
                $total += ($cart->qty * $cart->product->price)
                @endphp
                @endforeach
            </tbody>
        </table>
        <h2>Total Pemesanan: Rp.{{number_format($cart->qty * $cart->product->price)}}</h2>
    </div>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>