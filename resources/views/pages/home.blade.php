@extends('layouts.app')

@section('title')
    Store Homepage
@endsection

@section('content')
<div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div id="storeCarousel" class="carousel slide" data-ride="carouse">
              <ol class="carousel-indicators">
                <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                <li data-target="#storeCarousel" data-slide-to="1"></li>
                <li data-target="#storeCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/banner.jpg" alt="carousel image" class="d-block w-100"/>
                </div>
                <div class="carousel-item">
                  <img src="/images/banner.jpg" alt="carousel image" class="d-block w-100"/>
                </div>
                <div class="carousel-item">
                  <img src="/images/banner.jpg" alt="carousel image" class="d-block w-100"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="store-trend-categories mt-4">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
            @php $incrementCategory = 0 @endphp
          @forelse ($categories as $category)
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $incrementCategory+= 100 }}">
                <a href="{{ route('categories-detail',$category->slug) }}" class="component-categories d-block">
                <div class="categories-image">
                    <img src="{{ Storage::url($category->photo) }}" alt="categories-gadget" class=w-100>
                </div>
                <p class="categories-text">
                    {{ $category->name }}
                </p>
                </a>
            </div>
          @empty
              <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                No Cateogies Found
              </div>
          @endforelse
        </div>
      </div>

    </section>
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
              <h5>New Products</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/products-apple.jpg');"></div>
              </div>
              <div class="products-text">
                Apple Watch 4
              </div>
              <div class="products-price">
                $900
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/products-bogotta.jpg');"></div>
              </div>
              <div class="products-text">
                Orange Bogotta
              </div>
              <div class="products-price">
                $9000
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/products-sofa.jpg');"></div>
              </div>
              <div class="products-text">
                Sofa
              </div>
              <div class="products-price">
                $1900
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/products-bubuk.jpg');"></div>
              </div>
              <div class="products-text">
                Bubuk Melati
              </div>
              <div class="products-price">
                $500
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/products-tatakan.jpg');"></div>
              </div>
              <div class="products-text">
                Tatakan Gelas
              </div>
              <div class="products-price">
                $300
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/products-drone.jpg');"></div>
              </div>
              <div class="products-text">
                DJ Mavic 4
              </div>
              <div class="products-price">
                $1500
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/products-nike.jpg');"></div>
              </div>
              <div class="products-text">
                Nike black
              </div>
              <div class="products-price">
                $800
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/products-toys.jpg');"></div>
              </div>
              <div class="products-text">
                Monkey Toys
              </div>
              <div class="products-price">
                $310
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection
