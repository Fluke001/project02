@extends('layouts.admin.master')

@section('text')

<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
@csrf

<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "email is reauired">
						<span class="label-input100">email</span>
						<input id="email" class="input100" type="email" name="email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="password;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="password;"></span>
					</div>
					
					<div class="text-center p-t-10 ">
						<a href="{{ route('password.request') }}
">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="{{ route('register') }} "class="txt2">
							Sign Up
						</a>
					</div>
				</form>


@endsection