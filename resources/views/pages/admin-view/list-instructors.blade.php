@extends('layouts.dashboard')

@section('content')
    <div id="demo" class="mt-10">
        <div class="card">
            <div class="card-title">
                <h1>View All Instructors</h1>
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
                            <th>Instructor Name</th>
                            <th>Ski Type</th>
                            <th>Photo Consent?</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($instructors as $instructor)
                            <tr>
                                <td data-title="ID">{{$instructor->student_ID}}</td>
                                <td data-title="Name">{{$instructor->first_name }} {{$instructor->last_name}}</td>
                                <td data-title="Ski_Type">{{$instructor->ski_type}}</td>
                                <td data-title="Status">{{$instructor->photo_release}}</td>
                                <td>
                                    <button class="btn btn-danger" onclick="deleteInstructor({{ $instructor->instructor_ID }});">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>


        function deleteInstructor(id)
        {
            console.log("hi");
            var data = {
                "id": id
            };

            var url = "/delete/instructor";
            $.ajax({
                type: "POST",
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                success: function (resultData) {
                    if (resultData) {
                        location.href = "../../admin-view/list-instructors"                    }
                },
                error: function (jXHR, textStatus, errorThrown) {
                    console.log(errorThrown);
                    console.log(textStatus);
                    console.log(jXHR);

                },
                dataType: "JSON"
            });
        }
    </script>
@endsection