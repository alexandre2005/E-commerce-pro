<!DOCTYPE html>

<html>
    <head>
        <title>pdf</title>
    </head>
    <body>
        <h1>Order Details</h1>

        <h3>Costomer Name:{{ $order->name }}</h3>
        <h3>Costomer Email:{{ $order->email }}</h3>
        <h3>Costomer Address:{{ $order->address }}</h3>
        <h3>Costomer Id:{{ $order->user_id }}</h3>
        <h3>Costomer Phone:{{ $order->phone }}</h3>
        Product Name:<h3>{{ $order->product_title }}</h3>
        Product Quantity:<h3>{{ $order->quantity }}</h3>
        Product Price:<h3>{{ $order->price }}</h3>
        Product Status:<h3>{{ $order->payment_status }}</h3>
        Product Id:<h3>{{ $order->product_id }}</h3>

        <br>

        <img height="250" width="450" src="product/{{ $order->image }}">

    </body>
</html>
