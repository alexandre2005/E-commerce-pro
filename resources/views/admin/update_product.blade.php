<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    @include('admin.css')

    <style class="text/css">

        .div_center
        {

            text-align: center;
            padding-top: 40px;

        }

        .font_size
        {

            font-size: 40px;
            padding-bottom: 40px;

        }

        .text_color
        {
            color: black;
            padding-bottom: 20px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }

        .div_desing
        {
            padding-bottom: 15px;
        }

    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="div_center">

                    @if(session()->has('message'))

                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>

                    @endif
                    <h1 class="font_size">Update Product</h1>

                        <form action="{{ url('/update_product_confirm', $product->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="div_desing">
                                <label for="">Product Title</label>
                                <input class="text_color" type="text" name="title" placeholder="Write a title" required="" value="{{ $product->title }}">
                            </div>

                            <div class="div_desing">
                                <label for="">Product Description</label>
                                <input class="text_color" type="text" name="description" placeholder="Write a Description" required="" value="{{ $product->description }}">
                            </div>

                            <div class="div_desing">
                                <label for="">Product Price</label>
                                <input class="text_color" type="number" min="0" name="price" placeholder="Write a Price" required="" value="{{ $product->price }}">
                            </div>

                            <div class="div_desing">
                                <label for="">Discount Price</label>
                                <input class="text_color" type="number" name="discount_price" placeholder="Write a Discount" value="{{ $product->discount_price }}">
                            </div>

                            <div class="div_desing">
                                <label for="">Product Quantity</label>
                                <input class="text_color" type="number" name="quantity" placeholder="Write a Quantity" required="" value="{{ $product->quantity }}">
                            </div>

                            <div class="div_desing">
                                <label for="">Product Catagory</label>
                                    <select class="text_color" name="catagory" required="">
                                        <option value="{{ $product->catagory }}" selected="">{{ $product->catagory }}</option>

                                        @foreach ($catagory as $catagory)

                                            <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}</option>

                                        @endforeach

                                    </select>
                            </div>

                            <div class="div_desing">
                                <label for="">Current Product Image :</label>
                                <img style="margin: auto;" height="100" width="100" src="/product/{{ $product->image }}" alt="">
                            </div>

                            <div class="div_desing">
                                <label for="">Change Product Image :</label>
                                <input class="text_color" type="file" name="image">
                            </div>

                            <div class="div_desing">

                                <input type="submit" value="Update Product" class="btn btn-primary">
                            </div>

                        </form>

                </div>
            </div>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
