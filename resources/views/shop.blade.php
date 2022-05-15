	@extends('layout')
	@section('content')

	<!-- search area -->
	<div class="search-area">
		<div class="container">
<<<<<<< HEAD
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
					<form action="" class="form-inline" >
				<div class="form-group">
					<input type="form-control" name="key" placeholder="Search by name...">
				</div>
			</div>
				<button type="submit" class="btn btn-primary">
					<i class="fas fa-search"></i>
				</button>
			</form>
=======
			<form action="" class="form-inline" >
				<div class="form-group">
					<input type="form-control" name="key" placeholder="Search by name...">
>>>>>>> a085b691cc2fe5dd8c2310fee7b49db7e30ab8ea
				</div>
				<button type="submit" class="btn btn-primary">
					<i class="fas fa-search"></i>
				</button>
			</form>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Modern and Convenient</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
							@foreach($protypes as $item)
                            <li data-filter=".strawberry">{{$item->type_name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">All</span> Products</h3>
					</div>
				</div>
			</div>
			<div class="row product-lists">
				@foreach($products as $row)
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img class="img-fluid" src="assets/img//{{$row->image}}" alt=""></a>
						</div>
						<h3>{{ $row->name }}</h3>
						<p class="product-price"><span></span>{{ number_format($row->price)}}đ</p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						{{ $products->links() }}
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Top</span> Sellings</h3>
					</div>
				</div>
			</div>
			<div class="row product-lists">
				@foreach($topSell as $row)
					<div class="col-lg-4 col-md-6 text-center">
						<div class="single-product-item">
							<div class="product-image">
								<a href="single-product.html"><img class="img-fluid" src="assets/img//{{$row->image}}" alt=""></a>
							</div>
							<h3>{{ $row->name }}</h3>
							<p class="product-price"><span></span>{{ number_format($row->price)}}đ</p>
							<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
					@endforeach
				</div>
				{{ $topSell -> links() }}
		</div>
	</div>
	<!-- end products -->

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