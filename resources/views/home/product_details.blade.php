<!DOCTYPE html>
<html>
   <head>
      {{-- <base href="/public"> --}}
      <!-- Basic -->
      @include('home.css')
   </head>
   <body>
      <div class="hero_area">

        @include('home.header')




      <div class="col-sm-6 col-md-4 col-lg-4" >
        <div class="box">
           <div>
           <div class="img-box" style="padding: 30px;">
              <img src="/product/{{ $product->image }}" alt="">
           </div>
           <div class="detail-box">
              <h5>
                 {{ $product->title }}
              </h5>

              @if ($product->discount_price!=null)

               <h6 style="color: red;">
                   Discout Price
                   <br>
                 R${{ $product->discount_price }}
               </h6>

               <h6 style="text-decoration: line-through; color:blue;">
                   Price
                   <br>
                   R${{ $product->price }}
               </h6>

               @else

               <h6 style="color: blue;">
                   Price
                   <br>
                   R${{ $product->price }}
               </h6>

              @endif

              <h6>Category: {{ $product->catagory }}</h6>
              <h6>Description: {{ $product->description }}</h6>
              <h6>Quantity: {{ $product->quantity }}</h6>

              <form action="{{ url('add_cart', $product->id) }}" method="POST">

                @csrf

                <div class="row">

                    <div class="col-md-4">

                        <input type="number" name="quantity" value="1" min="1" style="width: 100px">

                    </div>

                    <div class="col-md-4">

                        <input type="submit" value="Add To Cart">

                    </div>

                </div>
              </form>

           </div>
        </div>
     </div>

    </div>

      @include('home.footer')

      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
