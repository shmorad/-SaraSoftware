@extends('layouts.app')
@section('title','Booking')
@section('content')
<div class="container">
    {{-- <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Product Booking Page</h3>
                </div>
                <div class="card-body">
                    <form id="booking-form">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="product">Product:</label>
                            <select class="form-control" id="product" required>
                                <option value="" selected disabled>Please select a product</option>
                                <option value="Product 1">Product 1</option>
                                <option value="Product 2">Product 2</option>
                                <option value="Product 3">Product 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" class="form-control" id="quantity" min="1" max="10" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Book Now</button>
                    </form>
                    <div id="confirmation" style="display:none;">
                        <h2>Thank you for your booking!</h2>
                        <p>Your booking details:</p>
                        <p id="booking-details"></p>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                          <tr>
                            <td>Sub Total</td>
                            <td class="text-right">$ 14,900.00</td>
                          </tr>
                          <tr>
                            <td>TAX (12%)</td>
                            <td class="text-right">$ 1,788.00</td>
                          </tr>
                          <tr>
                            <td class="text-bold-800">Total</td>
                            <td class="text-bold-800 text-right"> $ 16,688.00</td>
                          </tr>
                          <tr>
                            <td>Payment Made</td>
                            <td class="text-danger text-right">(-) $ 4,688.00</td>
                          </tr>
                          <tr class="bg-light">
                            <td class="text-bold-800">Balance Due</td>
                            <td class="text-bold-800 text-right">$ 12,000.00</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div> --}}
 


    <main class="page">
        <section class="shopping-cart dark">
            <div class="container">
               <div class="block-heading">
                 <h2>Shopping Cart</h2>
                 <p>SARA SOFTWARE</p>
               </div>
               <div class="content">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-fluid mx-auto d-block image" src="{{ asset('uploads/product/'.$product->product_image) }}">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-md-5 product-name">
                                                        <div class="product-name">
                                                            <a href="#">{{ $product->product_name }}</a>
                                                            <div class="product-info">
                                                                <div>Discription: <span class="value">{{ $product->product_desc }}</span></div>
                                                                <div id="price">Price:৳{{ $product->product_price }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 quantity">
                                                        <label for="quantity">Quantity:</label>
                                                        <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                                                    </div>
                                                    <div class="col-md-3 price">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Summary</h3>
                                <div class="summary-item"><span class="text">Subtotal</span><span class="price">{{ $product->product_price }}</span></div>
                                <div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
                                <div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
                                <div class="summary-item"><span class="text">Total</span><span class="price">{{ $product->product_price}}</span></div>
                                <button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
       </section>
   </main>
</div>

@endsection
@section('script')
<script type="text/javascript">
    var price = document.getElementById("price");
    var priceContent = price.innerHTML
    const quantity = document.getElementById('quantity');

      // function to quantity
      const quantityfunc = (q) => quantity * priceContent;
        console.log(quantityfunc());
  
</script>
@endsection
