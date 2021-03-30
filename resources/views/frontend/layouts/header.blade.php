<!-- Header Section -->
	<section style="background-color:  #badc50 " class="header">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light">
				<a href="{{url('./')}}" class="navbar-brand"><img src="{{asset('public/upload/logoimage/'.$logo->image)}}" style="height: 80px;width: 200px"></a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" >
					<div class="navbar-nav popular" style="alignment-baseline: : right;">
						<a href="{{url('./')}}" class="nav-item nav-link active">Home</a>
						<div class="nav-item dropdown">
							<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
							<div class="dropdown-menu" style="background: #BADDFB;">
								<a href="{{route('about.us')}}"  class="dropdown-item">About Us</a>
								<a href="{{route('our.mission')}}" class="dropdown-item">Mission</a>
								<a href="{{route('our.vission')}}" class="dropdown-item">Vision</a>
							</div>
						</div>
						<a href="{{route('our.news')}}" class="nav-item nav-link">News and Event</a>
						<a href="{{route('contact.us')}}" class="nav-item nav-link">Contact Us</a>
						<a href="http://www.magic.site.wildwestperformers.com" class="nav-item nav-link"target="_blank"> Admin Login</a>
						<a href="http://www.magic.site.wildwestperformers.com" class="nav-item nav-link"target="_blank"> Magician Login</a>
					</div>
					
				</div>
			</nav>
		</div>
	</section>