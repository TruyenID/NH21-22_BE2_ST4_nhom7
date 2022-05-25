@extends('layout')
	@section('content')
	<!-- search area -->
	<style>
		.row:after {
         content: "";
         display: table;
         clear: both;
         }
         .avatar {
         vertical-align: middle;
         width: 50px;
         height: 50px;
         border-radius: 50%;
         }
         .rate {
         float: left;
         height: 46px;
         padding: 0 10px;
         }
         .rate:not(:checked) > input {
         position:absolute;
         display: none;
         }
         .rate:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ccc;
         }
         .rate:not(:checked) > label:before {
         content: '★ ';
         }
         .rate > input:checked ~ label {
         color: #ffc700;
         }
         .rate:not(:checked) > label:hover,
         .rate:not(:checked) > label:hover ~ label {
         color: #deb217;
         }
         .rate > input:checked + label:hover,
         .rate > input:checked + label:hover ~ label,
         .rate > input:checked ~ label:hover,
         .rate > input:checked ~ label:hover ~ label,
         .rate > label:hover ~ input:checked ~ label {
         color: #c59b08;
         }
         .rating-container .form-control:hover, .rating-container .form-control:focus{
         background: #fff;
         border: 1px solid #ced4da;
         }
         .rating-container textarea:focus, .rating-container input:focus {
         color: #000;
         }
	</style>
	
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
					<img src="{{ asset('assets/img/'. $shop->image) }}" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h2>{{$shop->name}}</h2>
						<p class="single-product-pricing">{{ number_format($shop->price)}}VND</p>
						<p>{!! $des !!}</p>
						<div class="single-product-form">		
							<h5>Quantity</h5>
							<input name="qty" type="number" placeholder="0"><br>
							<input name="product_id" type="hidden" value="{{$shop->id}}"><br>		
							<a href="{{route('showcart')}}" data-url="{{ route('addToCart',['id'=>$shop->id]) }}" class="cart-btn add-to-cart"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
						<h4>Share:</h4>
						<ul class="product-share">
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- Display review section start -->
				<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                  <div>
                     <div class="row mt-5">
                        <h4>Comment Section :</h4>
                        <div class="col-sm-12 mt-5">
                           @foreach($review_ratings as $review)
                           <div class=" review-content">
                              <img src="https://www.w3schools.com/howto/img_avatar.png" class="avatar ">
                              <span class="font-weight-bold ml-2">{{$review->name}}</span>
                              <p class="mt-1">
                                 @for($i=1; $i<=$review->star_rating; $i++) 
                                 <span><i class="fa fa-star text-warning"></i></span>
                                 @endfor
                                 <span class="font ml-2">{{$review->email}}</span>
                              </p>
                              <p class="description ">
                                 {{$review->comments}}
                              </p>
                           </div>
                           <hr>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Review store Section -->
               <div class="container">
                  <div class="row">
                     <div class="col-sm-10 mt-4 ">
                        <form class="py-2 px-4" action="{{route('review.store')}}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                           @csrf
                           <input type="hidden" name="post_id" value="{{$shop->id}}">
                           <div class="row justify-content-end mb-1">
                              <div class="col-sm-8 float-right">
                                 @if(Session::has('flash_msg_success'))
                                 <div class="alert alert-success alert-dismissible p-2">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success!</strong> {!! session('flash_msg_success')!!}.
                                 </div>
                                 @endif
                              </div>
                           </div>
                           <p class="font-weight-bold ">Review</p>
                           <div class="form-group row">
                              <div class=" col-sm-6">
                                 <input class="form-control" type="text" name="name" placeholder="Name" maxlength="40" required/>
                              </div>
                              <div class="col-sm-6">
                                 <input class="form-control" type="email" name="email" placeholder="Email" maxlength="80" required/>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-6">
                                 <input class="form-control" type="text" name="phone" placeholder="Phone" maxlength="40" required/>
                              </div>
                              <div class="col-sm-6">
                                 <div class="rate">
                                    <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" class="rate" name="rating" value="2">
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                    <label for="star1" title="text">1 star</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-sm-12 ">
                                 <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                              </div>
                           </div>
                           <div class="mt-3 ">
                              <button class="btn btn-sm py-2 px-3 btn-info">Submit
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Products</h3>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($products as $row)
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/single-product/{{$row->id}}/{{$row->type_id}}"><img src="{{ asset('assets/img/' . $row->image) }}" alt=""></a>
						</div>
						<h3><a href="/single-product/{{$row->id}}/{{$row->type_id}}"> {{ $row->name }} </a></h3>
						<p class="product-price">{{ number_format($row->price)}}đ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end more products -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->
	@endsection