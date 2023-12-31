<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
	  <a class="navbar-brand" href="/">Photography</a>
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
		  <li class="nav-item">
			<a class="nav-link active" aria-current="page" href="/">Home</a>
		  </li>
		  {{-- <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Address
			</a>
			<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				<li><a class="dropdown-item" href="{{route('address.show')}}">Addresses</a></li>
			  <li><a class="dropdown-item" href="{{route('address.create')}}">Create Address</a></li>
			</ul>
		  </li> --}}
		  <li class="nav-item">
			<a class="nav-link" href="{{route('address.show')}}">Addresses</a>
		  </li>
		  {{-- <li class="nav-item">
			<a class="nav-link" href="{{route('shipment.create')}}">Shipments</a>
		  </li> --}}
		  <li class="nav-item">
			<a class="nav-link" href="{{route('fleet')}}">Fleet Networks</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Contact</a>
		  </li>
		  <!-- <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			  Dropdown
			</a>
			<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <li><a class="dropdown-item" href="#">Action</a></li>
			  <li><a class="dropdown-item" href="#">Another action</a></li>
			  <li><hr class="dropdown-divider"></li>
			  <li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul>
		  </li> -->
		  <!-- <li class="nav-item">
			<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		  </li> -->
		</ul>

 		  <ul class="navbar-nav flex-row">
		<li class="nav-item">
			<a class="nav-link pe-3" href="#!">
			<i class="fab fa-youtube"></i>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link px-3" href="#!">
			<i class="fab fa-facebook-f"></i>
			</a>
		</li>
		<li class="nav-item dropdown">
			@auth
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa fa-user" aria-hidden="true"></i>
			</a>
			<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <li><a class="dropdown-item" href="#">{{auth()->user()->name}}</a></li>
			  <li><a class="dropdown-item" href="{{route('change-password')}}">Change Password</a></li>
			  <li><hr class="dropdown-divider"></li>
			  <li> 
				<form action="{{route('logout')}}" method="POST">
					@method('POST')
					@csrf
					<button type="submit" class="btn transparent">
						Log Out
					</button>
				</form>
			</li>
			</ul>
		  </li>

			@else
			<li class="nav-item">
				<a class="nav-link" href="{{route('login')}}">Login</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="{{route('register')}}">Register</a>
			</li>
			@endauth
		
		</ul>
 	  </div>
	</div>
  </nav>
