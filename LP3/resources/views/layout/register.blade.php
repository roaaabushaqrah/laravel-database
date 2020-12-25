
@extends('layout.master')
@section('title')
Register
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
@endsection


@section('content')

<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				
				@error('name')
                                    <p style="color:black">{{ $message }}</p>
                                 @enderror

                                 @error('NID')
                                    <p style="color:black">{{ $message }}</p>
                                @enderror

                                @error('email')
                                    <p style="color:black">{{ $message }}</p>
                                      @enderror

                                      @error('Mobile')
                                    <p style="color:black">{{ $message }}</p>
                                  @enderror


                                  @error('address')
                                    <p style="color:black">{{ $message }}</p>
                                  @enderror

                                  @error('image')
                                <p style="color:black">{{ $message }}</p>
                                     @enderror
					<form class="" method="post" action="/students" enctype="multipart/form-data"
>@csrf
						<h1>Register</h1>
						<div class="form-group">
							<!-- <label for="name" class="cols-sm-2 control-label">Full Name</label> -->
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
									
								</div>
							</div>
						</div>

						<div class="form-group">
							<!-- <label for="email" class="cols-sm-2 control-label">NID</label> -->
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="NID" id="NID"  placeholder="Enter your Nationalnumber"/>
									
								</div>
							</div>
						</div>

						<div class="form-group">
							<!-- <label for="username" class="cols-sm-2 control-label">Email</label> -->
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
									
								</div>
							</div>
						</div>
                        <div class="form-group">
							<!-- <label for="username" class="cols-sm-2 control-label">Mobile</label> -->
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Enter your mobile"/>
									
								</div>
							</div>
						</div>

                        <div class="form-group">
							<!-- <label for="username" class="cols-sm-2 control-label">Address</label> -->
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="address" id="address"  placeholder="Enter your address"/>
									
								</div>
							</div>
						</div>

						

						<div class="form-group">
							<!-- <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label> -->
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="file" class="form-control" name="image" id="image"  placeholder="Confirm your Password"/>
									
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6"><a href="single"><input type="submit" value="Register" class="btn btn-primary
                     btn-block btn-lg" tabindex="7"></a></div>

						
					</form>
				</div>
			</div>
		</div>
@endsection
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
