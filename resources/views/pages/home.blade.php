@extends('layouts.dashboard')
@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- Show if the user is an employee --}}
                        @role("instructor")
                            You are logged in as an Instructor
                        @endrole

                        {{-- Show if the user is an admin --}}
                        @role("admin")
                            You are logged in as an Admin
                        @endrole

                        {{-- Show if the user is an student --}}
                        @role("student")
                            You are logged in as an Student
                        @endrole
                    </div>

                    <a href="{{ url('/logout') }}"> logout </a>
                </div>
            </div>
        </div>
    </div>
@endsection
