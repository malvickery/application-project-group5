@extends('layouts.dashboard')

@section('content')
    <div id="demo">
        <div class="card">
            <div class="card-title">
                <h1>View All Students</h1>
            </div>

            <!-- Responsive table starts here -->
            <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
            <div class="card-body">
                <div class="table-responsive-vertical shadow-z-1">
                    <!-- Table starts here -->
                    <table id="table" class="table table-hover table-mc-light-blue">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Ski Type</th>
                            <th>Payment Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td data-title="ID">{{$student->student_ID}}</td>
                                <td data-title="Name">{{$student->first_name }} {{$student->last_name}}</td>
                                <td data-title="Ski_Type">{{$student->ski_type}}</td>
                                <td data-title="Status">{{$student->paid}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection