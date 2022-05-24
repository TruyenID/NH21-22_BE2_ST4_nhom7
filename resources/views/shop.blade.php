@extends('layout')
	@section('content')

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<form action="">
						<div class="search-bar">
							<div class="search-bar-tablecell">
								<h3>Search For:</h3>
								<input name="key" type="text" placeholder="Keywords">
								<button type="submit">Search <i class="fas fa-search"></i></button>
							</div>
						</div>
					</form>
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
                            <li data-filter=".strawberry">
								<a href="{{ route('getprotypes',['id'=>$item->type_id]) }}">{{$item->type_name}}</a>
							</li>
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
							<a href="/single-product/{{$row->id}}/{{$row->type_id}}"><img class="img-fluid" src="{{ asset('assets/img/'. $row->image) }}" alt=""></a>
						</div>
						<h3><a href="/single-product/{{$row->id}}/{{$row->type_id}}"> {{ $row->name }} </a></h3>
						<p class="product-price"><span></span>{{ number_format($row->price)}}đ</p>
						<a href="{{route('showcart')}}" data-url="{{ route('addToCart',['id'=>$row->id]) }}" class="cart-btn add-to-cart"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
					{{ $products-> appends(request()->all()) -> links() }}
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
								<a href="/single-product/{{$row->id}}/{{$row->type_id}}"><img class="img-fluid" src="{{ asset('assets/img/'. $row->image) }}" alt=""></a>
							</div>
							<h3><a href="/single-product/{{$row->id}}/{{$row->type_id}}"> {{ $row->name }} </a></h3>
							<p class="product-price"><span></span>{{ number_format($row->price)}}đ</p>
							<a href="{{route('showcart')}}" data-url="{{ route('addToCart',['id'=>$row->id]) }}" class="cart-btn add-to-cart"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
					@endforeach
				</div>
				<div class="row" style="float:right">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
					{{ $topSell -> links() }}
					</div>
				</div>
			</div>
			</div>
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