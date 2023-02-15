<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

    .title_deg
    {
        text-align: center;
    }

    .table_deg
    {
        border: 2px solid white;
        width: 100%;
        margin: auto;
        padding-top: 50px;
        text-align: center;
    }

    .th_deg
    {
        background-color: red;
    }

    .img_deg
    {
        width: 200px;
        height: 200px;
    }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')

      <div class="main-panel">
        <div class="content-wrapper">

            <h1 class="title_deg">All Orders</h1>

            <div style="padding-Left 400px; padding-bottom: 30px">

                <form action="{{ url('search') }}" method="GET">

                    @csrf

                    <input type="text" name="search" placeholder="Search For Something">

                    <input type="submit" value="Search" class="btn btn-outline-info">
                </form>

            </div>

            <table class="table_deg">

                <tr class="th_deg">

                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product_title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Deliver</th>
                    <th>Print PDF</th>
                    <th>Send Email</th>

                </tr>

                @forelse ($order as $order)

                    <tr>

                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->product_title }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>R${{ $order->price }}</td>
                        <td>{{ $order->payment_status }}</td>
                        <td>{{ $order->delivery_status }}</td>
                        <td>

                            <img class="img_deg" src="/product/{{ $order->image }}" alt="">

                        </td>

                        <td>
                            @if ($order->delivery_status == 'processing')
                                <a href="{{ url('deliver', $order->id) }}" onclick="return confirm('Are u sure?')" class="btn btn-success">Deliver</a>

                                @else

                                <p style="color: green;">Deliver</p>

                            @endif
                        </td>

                        <td>

                            <a href="{{ url('print_pdf', $order->id) }}" class="btn btn-secondary">Print PDf</a>

                        </td>

                        <td>

                            <a href="{{ url('send_email', $order->id) }}" class="btn btn-info">Send Email</a>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="16">No Data</td>
                    </tr>

                @endforelse

            </table>

        </div>
      </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
