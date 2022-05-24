	@extends('layout')
	@section('content')

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap delete_cart_url"  data-url="{{route('deletecart')}}">
						<table class="cart-table update_cart_url" data-url="{{route('updatecart')}}">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
									<th class="product-total">Action</th>
								</tr>
							</thead>
							@php
							$total = 0;
							@endphp
							<tbody>
							@if(Auth::check())
								@foreach($carts as $id=>$row)
									@php
									$total += $row['price'] * $row['quantity'];
									@endphp
								<tr class="table-body-row">
									<td class="product-remove"><a href="{{url('cart')}}"  data-id="{{$id}}" class="cart_delete"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="assets/img/{{$row['image']}} " alt=""></td>
									<td class="product-name">{{ $row['name'] }}</td>
									<td class="product-price">{{  number_format($row['price']) }} VND</td>
									<td class="product-quantity"><input type="number" value="{{$row['quantity']}}"></td>
									<td class="product-total">{{  number_format($row['price'] * $row['quantity']) }} VND</td>
									<td><a href="{{url('cart')}}" data-id="{{$id}}" class="boxed-btn cart_update">Update Cart</a></td>
								</tr>
								@endforeach
							@endif
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>0 VND</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>0 VND</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>{{number_format($total)}} VND</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="{{url ('checkout')}}" class="boxed-btn black">Check Out</a>
						</div>
					</div>

					<div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.html">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

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