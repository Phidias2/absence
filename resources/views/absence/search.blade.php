@extends('layouts.app')
@php
  $categories = DB::table('ads')->distinct()->pluck('category');
@endphp
@section('content')
</div>
</div>
<div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
<div class="col-lg-4 col-6 text-left">
    
    <form action="{{ route('ads.search') }}" method="get">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for products" id="keyword" name="keyword">
            <div class="input-group-append">
                <span class="input-group-text bg-transparent text-primary">
                    <i class="fa fa-search"></i>
                </span>
            </div>
        </div>
    
</div>
</div>
</div>
<!-- Topbar End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Ads</span></h2>
            <div class="row px-xl-5">

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">


                <!-- filter by -->
<div class="filter-by text-center">
    <h3>Filter by</h3>
</div>

  <div class ="filter-by-c">
  <label class="labelc" for="category">Category :</label>
  <select class="selectc form-select" name="category" id="category">
    <option value="">All</option>
    @foreach($categories as $category)
    <option value="{{$category}}"> {{$category}}</option>
    @endforeach
  </select>
  </div>


  <div class ="filter-by-c">
    <label class="labelc" for="location">Location :</label>
    <input class="selectc" id="location" type="text" name="location" placeholder="Enter a location">
  </div>



  <div class="filter-by-c">
    <p  class= "price-r" for="price">Price Range :</p> 
    <label for="price-min">Min:</label>
    <input class="selectc" type="text" id="price-min" name="min" placeholder="min">
    <label for="price-max">Max:</label>
    <input class="selectc" type="text" id="price-max" name="max" placeholder="max">
    <div class="slider-range"></div>
  </div>
  
  <div class ="filter-by-c">
    <label class="labelc" for="condition">Condition :</label>
    <select class="selectc form-select" id="condition" name="condition">
      <option value="">All</option>
      <option value="new">New</option>
      <option value="good">Good</option>
      <option value="used">Used</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Filter</button>
  </form>    
</div>
          @forelse($ads as $ad)
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('storage/images/'.$ad->image) }}" alt="" width=400px height=350px>
                        
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="ads/{{ $ad->id }}">{{ $ad->title }}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$ {{ $ad->price }}</h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>

@endforeach
</div>
    </div>
<div class="text-center">{{$ads->links()}}</div>

@endsection
