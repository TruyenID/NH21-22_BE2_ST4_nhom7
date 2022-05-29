<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Electro</title>
	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{url ('assets/img/favicon.png') }}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ url ('assets/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ url ('assets/bootstrap/css/bootstrap.min.css') }}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ url ('assets/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ url ('assets/css/magnific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ url ('assets/css/animate.css') }}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ url ('assets/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ url ('assets/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ url ('assets/css/responsive.css') }}">
	<!-- sweetalert.css -->
	<link rel="stylesheet" href="{{ url ('assets/css/sweetalert.css') }}">
</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="{{url ('index')}}">
								<img src="/assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->
						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="{{url ('index')}}">Home</a>
									<ul class="sub-menu">
										<li><a href="{{url ('index')}}">Static Home</a></li>
									</ul>
								</li>
								<li><a href="{{url ('about')}}">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="{{url ('about')}}">About</a></li>
										<li><a href="{{url ('cart')}}">Cart</a></li>
										<li><a href="{{url ('checkout')}}">Check Out</a></li>
										<li><a href="{{url ('contact')}}">Contact</a></li>
										<li><a href="{{url ('shop')}}">Shop</a></li>
									</ul>
								</li>
								<li><a href="{{url ('contact')}}">Contact</a></li>
								<li><a href="{{url ('shop')}}">Shop</a>
									<ul class="sub-menu">
										<li><a href="{{url ('shop')}}">Shop</a></li>
										<li><a href="{{url ('checkout')}}">Check Out</a></li>
										<li><a href="{{url ('cart')}}">Cart</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="{{url ('cart')}}"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
										<a href="{{url ('auth.login') }}"><i class="fa fa-user"></i></a>
										@if(Auth::check())
										<div class="dropdown">
  											<button style="border-radius:10px" onclick="myFunction()" class="dropbtn">{{ Auth::user()->name }}</button>
  											<div id="myDropdown" class="dropdown-content">
											  <form method="POST" action="{{ route('logout') }}">
										@csrf

										<x-dropdown-link :href="route('logout')"
												onclick="event.preventDefault();
															this.closest('form').submit();">
											{{ __('Log Out') }}
										</x-dropdown-link>
									</form>
											</div>
										</div>
										@endif
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	@yield('content')

    <!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="{{url ('index')}}">Home</a></li>
							<li><a href="{{url ('about')}}">About</a></li>
							<li><a href="{{url ('shop')}}">Shop</a></li>
							<li><a href="{{url ('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- sweetalert.js -->
	<script src="{{ url ('assets/js/sweetalert.js') }}"></script>
	<!-- jquery -->
	<script src="{{ url ('assets/js/jquery-1.11.3.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ url ('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{ url ('assets/js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{ url ('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{ url ('assets/js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{ url ('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{ url ('assets/js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{ url ('assets/js/sticker.js') }}"></script>
	<!-- main js -->
	<script src="{{ url ('assets/js/main.js') }}"></script>
	<script type="text/javascript">
		function addTocart(event){
			let urlcart = $(this).data('url');
			$.ajax({
				type:"GET",
				url : urlcart,
				data : 'json',
				success: function (data){
					if(data.code === 200){	
						
					}
				},
				error: function (data){

				}
			});
		}
		function cartupdate(event){
			let urlupdateCart = $('.update_cart_url').data('url');
			let id = $(this).data('id');
			let quantity = $(this).parents('tr.table-body-row').find('input').val();
			// alert(quantity);
			$.ajax({
				type: "GET",
				url: urlupdateCart,
				data : {id: id, quantity: quantity},
				success: function (data){	
					if(data.code === 200){
						$('.cart-section').html(data.cart);
						alert('Update Cart successful') 
					}
				},
				error: function (data){
				}
			})
		}
		function cartdelete(event){
			let urldeleteCart = $('.delete_cart_url').data('url');
			$.ajax({
				type: "GET",
				url: urldeleteCart,
				data : {id: id},
				success: function (data){	
					if(data.code === 200){
						$('.cart-section').html(data.cart);
						alert('Delete Cart successful') 
					}
				},
				error: function (data){
				}
			})
		}
		$(function () {
			$('.add-to-cart').on('click',addTocart);
		});
		$(function (){
			$(document).on('click','.cart_update',cartupdate);
		}) 
		$(function (){
			$(document).on('click','.cart_delete',cartdelete);
		})
		$(function (){
			$(document).on('click','.place_order',PlaceOrder);
		})
	</script>
</body>
</html>