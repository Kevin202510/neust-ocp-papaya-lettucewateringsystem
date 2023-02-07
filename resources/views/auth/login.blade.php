@extends('layouts.landingpage.master_auth')

@section('title')
    Admin Login
@endsection

@section('content')
<section id="hero" class="hero">
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 40vw; margin-top:18vh;background-color: #f0dddd70;">
            <div class="card-header d-flex justify-content-center">
              <h3>Login</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger p-0">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        </div>
                        <input aria-describedby="emailHelpBlock" id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               placeholder="Enter Email" tabindex="1"
                               value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}" autofocus
                               required>
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                        </div>
                        <input aria-describedby="passwordHelpBlock" id="password" type="password"
                               value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}"
                               placeholder="Enter Password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password"
                               tabindex="2" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                      </div>
        
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection
