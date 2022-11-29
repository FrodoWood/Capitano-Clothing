@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card rounded-0">
                
                <div class="card-body p-0">
                    <div class="row">
                      <div class=" col-sm-12 col-md-6 col-lg-6 p-4 pe-5">
                        <form method="POST" action="{{ route('login') }}">
                          @csrf
                          <div class="row mb-3">
                              <label for="email" class="col-lg-12 form-label ">{{ __('Email Address') }}</label>
                              <div class="col-lg-12">
                                  <input id="email" type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  @error('email')
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="row mb-3">
                              <label for="password" class="col-lg-12 form-label ">{{ __('Password') }}</label>
                              <div class="col-lg-12">
                                  <input id="password" type="password" class="form-control rounded-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                  @error('password')
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="row mb-3">
                              <div class="col-lg-12 ">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                      <label class="form-check-label" for="remember">
                                          {{ __('Remember Me') }}
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="row mb-0">
                              <div class="col-lg-12 ">
                                  <button type="submit" class="btn btn-primary bg-dark rounded-0 w-25">
                                      {{ __('Login') }}
                                  </button>
                              </div>
                              <div class="col-lg-12">
                                @if (Route::has('password.request'))
                                      <a class="btn btn-link p-0 mt-2" href="">
                                          {{ __('Forgot Your Password?') }}
                                      </a>
                                  @endif
                              </div>
                          </div>
                      </form>
                      </div>
                      
                      <div class=" col-sm-12 col-md-6 col-lg-6 order-first">
                          <div class="row" > <img class="img-fluid" src="{{ URL('images/image_6487327.JPG')}}" style="height: 331px;" /> </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




