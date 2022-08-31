<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{!! asset('assets/style.css') !!}">
	<title>Edit Profile</title>
</head>
<body>

<header>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3">
				<div class="logo">
					<a href="#"><img src="{!! asset('assets/images/logo.png') !!}" alt=""></a>
				</div>
			</div>
			<div class="col-lg-6">
				<nav class="navbar navbar-expand-lg">
				  <div class="container-fluid">
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarNavDropdown">
				      <ul class="navbar-nav">
				        <li class="nav-item dropdown">
				          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				            About
				          </a>
				          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				            <li><a class="dropdown-item" href="#">Who We are</a></li>
				            <li><a class="dropdown-item" href="#">Why Us</a></li>
				            <li><a class="dropdown-item" href="#">Our Mission</a></li>
				          </ul>
				        </li>
				        <li class="nav-item dropdown">
				          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				            Leagues
				          </a>
				          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				            <li><a class="dropdown-item" href="#">League 1</a></li>
				            <li><a class="dropdown-item" href="#">League 2</a></li>
				            <li><a class="dropdown-item" href="#">League 3</a></li>
				          </ul>
				        </li>
				        <li class="nav-item dropdown">
				          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				            Courts
				          </a>
				          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				            <li><a class="dropdown-item" href="#">Courts 1</a></li>
				            <li><a class="dropdown-item" href="#">Courts 2</a></li>
				            <li><a class="dropdown-item" href="#">Courts 3</a></li>
				          </ul>
				        </li>
				      </ul>
				    </div>
				  </div>
				</nav>
			</div>
			<div class="col-lg-2">
				<div class="dropdown">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
				    Account
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
				    <li><a class="dropdown-item" href="#">Profile</a></li>
				    <li><a class="dropdown-item" href="#">Setting</a></li>
				    <li><a class="dropdown-item" href="#">Logout</a></li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="edit_bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="profile_img">
					<img src="{!! asset('assets/images/user.png') !!}" class="img-fluid" alt="">
					<a href="#"><i class="fa fa-camera"></i></a>
				</div>
				<h4>Score Confirmation Email</h4>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
				  <label class="form-check-label" for="flexRadioDefault1">Yes</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
				  <label class="form-check-label" for="flexRadioDefault2">No</label>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="edit_form">
					<h3>Edit Profile</h3>
                    <form method="POST" action="{{ route('user.update', $user->id) }}" class="number-tab-steps wizard-circle" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
					<div class="row">
						<div class="col-lg-6">
							<div class="mb-3">
								<label>First Name <span>*</span></label>
								<input type="text" class="form-control" name="first_name" value="{{$user->first_name}}">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label>Last Name <span>*</span></label>
								<input type="text" class="form-control" name="last_name" value="{{$user->last_name}}">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label>Email <span>*</span></label>
								<input type="text" class="form-control" name="email" value="{{$user->email}}">
							</div>
						</div>	
						<div class="col-lg-6"></div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label>Address Lane 1 <span>*</span></label>
								<input type="text" class="form-control" name="address1" value="{{$user->address1}}">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label>Address Lane 2</label>
								<input type="text" class="form-control" name="address2" value="{{$user->address2}}">
							</div>
						</div>	
						<div class="col-lg-6">
							<div class="mb-3">
								<label>City <span>*</span></label>
								<input type="text" class="form-control" name="city" value="{{$user->city}}">
							</div>
						</div>	
						<div class="col-lg-6">
							<div class="mb-3">
								<label>State <span>*</span></label>
								<select class="form-control" name="state">
									<option>Select</option>
                                    @foreach($states as $state)
                                    <option value="{{ $state->id }}" {{ ($user->state_id == $state->id ? "selected":"") }}>{{ $state->name }}</option>
                                    @endforeach 
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label>Zip Code <span>*</span></label>
								<input type="text" class="form-control" name="zip_code" value="{{$user->zip_code}}">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label>Preferred Home Court<span>*</span></label>
								<select class="form-control" name="home_court">
									<option>Select option</option>
									@foreach($home_courts as $home_court)
                                    <option value="{{ $home_court->id }}" {{ ($user->home_court_id == $home_court->id ? "selected":"") }}>{{ $home_court->name }}</option>
                                    @endforeach 
								</select>
							</div>
						</div>	
					</div>
					<div class="edit_list">
						<h5 class="my-3">Playing Time Availability<span>*</span> <i>(Select all that apply)</i></h5>
						<div class="form-check">
                        @foreach($playing_times as $playing_time)
						  <input class="form-check-input" type="checkbox" name="playing_time[]" value="{{ $playing_time->id }}" id="flexCheckDefault{{$playing_time->id}}" {{ ($user_playing[0]->playing_id == $playing_time->id ? "checked":"") }}>
						  <label class="form-check-label" for="flexCheckDefault{{$playing_time->id}}">{{$playing_time->type}}</label>
                        @endforeach
						</div>
						
						<button type="submit" class="btn mt-4">Update</button>
					</div>
                    </form>
					
				</div>
			</div>
		</div>
	</div>
</div>


















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>