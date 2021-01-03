@extends('layouts.app')

@section('title')
    Store Cart Page
@endsection

@section('content')
<div class="page-content page-cart">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">
                  Cart
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <td>Image</td>
                  <td>Name &amp; Seller</td>
                  <td>Price</td>
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 20%;">
                    <img src="/images/products-details-1.jpg" alt="" class="cart-image w-100">
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Sofa Ternyaman</div>
                    <div class="product-subtitle">by Budi</div>
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">$30,000</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td style="width: 20%;">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 20%;">
                    <img src="/images/products-details-2.jpg" alt="" class="cart-image w-100">
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Sneaker</div>
                    <div class="product-subtitle">by Agus</div>
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">$10,000</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td style="width: 20%;">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 20%;">
                    <img src="/images/products-details-4.jpg" alt="" class="cart-image w-100">
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Coffee Beer</div>
                    <div class="product-subtitle">by Bambang</div>
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">$40,000</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td style="width: 20%;">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr/>
          </div>
          <div class="col-12">
            <h2 class="mb-4">Shipping Details</h2>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressOne">Address 1</label>
              <input type="text" class="form-control" id="addressOne" name="addressOne" value="Cemara Dua">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressTwo">Address 2</label>
              <input type="text" class="form-control" id="addressTwo" name="addressTwo" value="Blok B2 No.99">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="province">Province</label>
              <select name="province" id="province" class="form-control">
                <option value="Central Java">Central Java</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control">
                <option value="Solo">Solo</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="postalCode">Postal Code</label>
              <input type="text" class="form-control" id="postalCode" name="postalCode" value="57554">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="country">Country</label>
              <input type="text" class="form-control" id="country" name="country" value="Indonesia">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="mobile">Mobile</label>
              <input type="text" class="form-control" id="mobile" name="mobile" value="0821414214">
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr/>
          </div>
          <div class="col-12">
            <h2 class="mb-1">Payment Informations</h2>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">$10</div>
            <div class="product-sutitle">Country Tax</div>
          </div>
          <div class="col-4 col-md-3">
            <div class="product-title">$300</div>
            <div class="product-sutitle">Product Insurance</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">$500</div>
            <div class="product-sutitle">Ship To Jogjakarta</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">$2000</div>
            <div class="product-sutitle">Total</div>
          </div>
          <div class="col-8 col-md-3">
            <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block">
              Checkout Now
            </a>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection