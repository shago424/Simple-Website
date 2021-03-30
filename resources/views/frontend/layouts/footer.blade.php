<!-- Footer Part -->
	<section class="footer_part">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h4 style="color: white">Contact Us</h4>
					<p style="color: white">Address: {{$contact->address}}, Mobile: {{$contact->mobile}}, Email: {{$contact->email}}</p>
				</div>
				<div class="col-md-4">
					<h4 style="color: white">Follow Us</h4>
					<div class="social">
						<ul>
							<li><a href="{{$contact->facebook}}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="{{$contact->twitter}}"><i class="fa fa-twitter-square" target="_blank"></i></a></li>
							<li><a href="{{$contact->youtube}}" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
							<li><a href="{{$contact->googleplus}}"><i class="fa fa-google-plus-square"target="_blank"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<a class="float-left" href="{{route('home')}}" target="_blank"><i class="fa fa-dashboard-square"><h5> Dashboard Login</h5></i></a>
					<p style="color: white;padding: 50px 0px 10px 0px;">
						Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> @ magic
					</p>
				</div>
			</div>
		</div>
	</section>