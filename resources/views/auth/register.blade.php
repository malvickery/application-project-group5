@extends('layouts.app')

@section('content')
    <div class="box">
        <div class="grid">

            <div class="login">

                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="skiing"
                     class="svg-inline--fa-2 fa-skiing fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 512 512" width="30%" height="30%" >
                    <path fill="#c32b32"
                          d="M432 96c26.5 0 48-21.5 48-48S458.5 0 432 0s-48 21.5-48 48 21.5 48 48 48zm73 356.1c-9.4-9.4-24.6-9.4-33.9 0-12.1 12.1-30.5 15.4-45.1 8.7l-135.8-70.2 49.2-73.8c12.7-19 10.2-44.5-6-60.6L293 215.7l-107-53.1c-2.9 19.9 3.4 40 17.7 54.4l75.1 75.2-45.9 68.8L35 258.7c-11.7-6-26.2-1.5-32.3 10.3-6.1 11.8-1.5 26.3 10.3 32.3l391.9 202.5c11.9 5.5 24.5 8.1 37.1 8.1 23.2 0 46-9 63-26 9.3-9.3 9.3-24.5 0-33.8zM120 91.6l-11.5 22.5c14.4 7.3 31.2 4.9 42.8-4.8l47.2 23.4c-.1.1-.1.2-.2.3l114.5 56.8 32.4-13 6.4 19.1c4 12.1 12.6 22 24 27.7l58.1 29c15.9 7.9 35 1.5 42.9-14.3 7.9-15.8 1.5-35-14.3-42.9l-52.1-26.1-17.1-51.2c-8.1-24.2-40.9-56.6-84.5-39.2l-81.2 32.5-62.5-31c.3-14.5-7.2-28.6-20.9-35.6l-11.1 21.7h-.2l-34.4-7c-1.8-.4-3.7.2-5 1.7-1.9 2.2-1.7 5.5.5 7.4l26.2 23z"></path>
                </svg>

                <h2 class="h2-register">Register</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="input">
                                <div class="beforeInput">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                        <path fill="#fff" d="M6.9 19c0-.5-.3-.6-1.3-.6-.9 0-1.5-.2-2-.6-.6-.6-.6-1-.6-6.4s0-5.9.6-6.5c.6-.6 1.1-.6 8.4-.6 7.3 0 7.8 0 8.4.6.6.6.6 1.1.6 6.5 0 5.3 0 5.8-.6 6.4-.5.4-1.1.6-2 .6-1 0-1.3.1-1.3.7 0 .5-.2.6-1.2.6-1.1 0-1.3 0-1.3-.6s-.2-.7-2.6-.7-2.6 0-2.6.7c0 .5-.2.6-1.3.6-1 0-1.2 0-1.2-.6zm12.7-7.6V5.7H4.4v11c.2.4 1.7.4 7.7.4l7.5-.1zM5.6 14c0-.3.4-1 1-1.5.6-.9.8-1.2.5-1.7-.5-.8 0-2 .9-2.5 1.6-.7 3.3 1 2.5 2.5-.3.5-.2.8.6 1.7.5.5.9 1.2.9 1.5 0 .7-1.2.6-1.4-.2-.5-1.5-2.8-1.6-3.5-.1-.4.8-1.5 1-1.5.3zm3.7-3.7c.3-.6-.4-1.2-.9-.7-.3.3-.1 1 .4 1 .1 0 .4-.1.5-.3zm4 2.2c0-.5.2-.6 2.6-.6 2.3 0 2.5 0 2.5.6s-.2.7-2.5.7c-2.4 0-2.6 0-2.6-.7zm0-2.5c0-.6.2-.7 2.6-.7 2.3 0 2.5 0 2.5.7 0 .6-.2.6-2.5.6-2.4 0-2.6 0-2.6-.6z"></path>
                                    </svg>
                                </div>

                            <div class="col-md-6">
                                <input id="name" value="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="row">
                                <div class="input">
                                    <div class="beforeInput">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                            <path fill="#fff"
                                                  d="M3.6 18.4c-.6-.6-.6-1-.6-6.4s0-5.8.6-6.4c.6-.6 1.1-.7 8.4-.7 7.3 0 7.8 0 8.4.7.6.6.6 1 .6 6.4s0 5.8-.6 6.4c-.6.6-1.1.7-8.4.7-7.3 0-7.8 0-8.4-.7zM18 16.7c-2.5-2-3.1-2.7-2.9-3 .4-.6.7-.5 2.8 1.2l2 1.7V12c0-4.5-.1-4.6-.7-4.1l-3.9 2.6-3.2 2.3-3.2-2.3L4.9 8c-.6-.5-.6-.4-.6 4v4.7l2-1.7c2-1.7 2.3-1.8 2.7-1.2.2.3-.4 1-3 3l-1.2 1h14.4zm-2.2-8L19 6.4l-3.6-.1H5l3.3 2.4C10 9.9 11.7 11 12 11c.2 0 1.9-1 3.8-2.3z"></path>
                                        </svg>
                                    </div>
                            <div class="col-md-6">
                                <input id="email" value="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="col-md-6">
                                <div class="input password">
                                    <div class="beforeInput">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                            <path fill="#fff"
                                                  d="M10.1 20.7C5.6 19.3 4 13.4 7.2 10c.5-.5.6-1.1.6-2.2C7.8 5 9.5 3.1 12 3.1c2.6 0 4.3 1.9 4.3 4.7 0 1.1.1 1.7.6 2.2 1.2 1.2 1.6 2.4 1.6 4.4 0 2.7-1.2 4.7-3.5 6-1.1.5-3.7.7-4.9.3zm4.4-1.6c4-2 4-7.5 0-9.5a4.8 4.8 0 0 0-4.9 0c-4 2-4 7.5 0 9.5.8.4 1.9.7 2.4.7.6 0 1.7-.3 2.5-.7zm-3-2.3a2 2 0 0 0-.7-1.2 2 2 0 0 1-.6-1.2c0-.8 1-1.8 1.8-1.8s1.9 1 1.9 1.8c0 .3-.3.9-.6 1.2a2 2 0 0 0-.6 1.2c0 .4-.2.6-.7.6-.4 0-.6-.2-.6-.6zM12 8l2.2.2c.8.3.9.2.9-.7 0-1.8-1.4-3.3-3-3.3-1.7 0-3 1.5-3 3.3 0 1 0 1 .8.7L12 8z"></path>
                                        </svg>
                                    </div>
                                    <input id="password" type="password"
                                           class="password{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           value="password" name="password" required/>
                                    <div class="afterInput">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="closed-eye">
                                            <path fill="#fff"
                                                  d="M18.4 18.6l-1-1-2.3.6c-3 .7-6 .5-8.3-.7-2-1-4.8-3.9-4.8-4.9C2 12 4.8 9 6.3 8l.8-.5L6 6C4.9 5 4.7 4.7 5 4.4c.3-.3 2 1.2 7.8 7 6.6 6.6 7.9 8.3 6.7 8.3a5 5 0 0 1-1.2-1zm-4.2-2c1.3-.7 1.3-1 .3-1.9-.7-.6-.9-.7-1.8-.3-.8.3-1.2.3-1.9-.2-1-.6-1.2-2.1-.4-2.8.3-.3.2-.6-.5-1.3l-1-1-.8 1c-.8.9-.8 1.2-.7 2.8.3 3.5 3.9 5.5 6.8 3.8zM6.5 15c-.3-.5-.5-1.6-.5-2.3 0-.8.2-1.9.5-2.4s.4-1 .2-1c-.4 0-3.4 3-3.4 3.4 0 .3 3 3.3 3.4 3.3.2 0 0-.5-.2-1zm12.4.5c-.3-.5-.3-.7.5-1.5.5-.5.9-1.1.9-1.4A11 11 0 0 0 17 9.3s0 .6.3 1.4c.6 1.5.7 2.8.2 3.1-.4.3-.9-.5-1.1-2-.4-1.7-2-3.4-3.8-3.7-.8-.1-1.6-.5-2-.9-.6-.6-.6-.7 1.8-.5 3.6.3 7 2 8.6 4.6l.9 1.4-1 1.3c-1.2 1.9-1.6 2.1-2 1.5z"></path>
                                        </svg>
                                    </div>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <div class="input password-confirm">
                                    <div class="beforeInput-confirm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                            <path fill="#fff"
                                                  d="M10.1 20.7C5.6 19.3 4 13.4 7.2 10c.5-.5.6-1.1.6-2.2C7.8 5 9.5 3.1 12 3.1c2.6 0 4.3 1.9 4.3 4.7 0 1.1.1 1.7.6 2.2 1.2 1.2 1.6 2.4 1.6 4.4 0 2.7-1.2 4.7-3.5 6-1.1.5-3.7.7-4.9.3zm4.4-1.6c4-2 4-7.5 0-9.5a4.8 4.8 0 0 0-4.9 0c-4 2-4 7.5 0 9.5.8.4 1.9.7 2.4.7.6 0 1.7-.3 2.5-.7zm-3-2.3a2 2 0 0 0-.7-1.2 2 2 0 0 1-.6-1.2c0-.8 1-1.8 1.8-1.8s1.9 1 1.9 1.8c0 .3-.3.9-.6 1.2a2 2 0 0 0-.6 1.2c0 .4-.2.6-.7.6-.4 0-.6-.2-.6-.6zM12 8l2.2.2c.8.3.9.2.9-.7 0-1.8-1.4-3.3-3-3.3-1.7 0-3 1.5-3 3.3 0 1 0 1 .8.7L12 8z"></path>
                                        </svg>
                                    </div>
                                    <input id="password-confirm" value="password" type="password" class="form-control" name="password_confirmation" required>
                                    <div class="afterInput-confirm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="closed-eye">
                                            <path fill="#fff"
                                                  d="M18.4 18.6l-1-1-2.3.6c-3 .7-6 .5-8.3-.7-2-1-4.8-3.9-4.8-4.9C2 12 4.8 9 6.3 8l.8-.5L6 6C4.9 5 4.7 4.7 5 4.4c.3-.3 2 1.2 7.8 7 6.6 6.6 7.9 8.3 6.7 8.3a5 5 0 0 1-1.2-1zm-4.2-2c1.3-.7 1.3-1 .3-1.9-.7-.6-.9-.7-1.8-.3-.8.3-1.2.3-1.9-.2-1-.6-1.2-2.1-.4-2.8.3-.3.2-.6-.5-1.3l-1-1-.8 1c-.8.9-.8 1.2-.7 2.8.3 3.5 3.9 5.5 6.8 3.8zM6.5 15c-.3-.5-.5-1.6-.5-2.3 0-.8.2-1.9.5-2.4s.4-1 .2-1c-.4 0-3.4 3-3.4 3.4 0 .3 3 3.3 3.4 3.3.2 0 0-.5-.2-1zm12.4.5c-.3-.5-.3-.7.5-1.5.5-.5.9-1.1.9-1.4A11 11 0 0 0 17 9.3s0 .6.3 1.4c.6 1.5.7 2.8.2 3.1-.4.3-.9-.5-1.1-2-.4-1.7-2-3.4-3.8-3.7-.8-.1-1.6-.5-2-.9-.6-.6-.6-.7 1.8-.5 3.6.3 7 2 8.6 4.6l.9 1.4-1 1.3c-1.2 1.9-1.6 2.1-2 1.5z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-register">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                <div class="login-box">
                    <p class="paragraph-r">Already have an account? <br><a class="nav-link-r"
                                                                       href="{{ route('login') }}">{{ __('Login') }}</a></p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
