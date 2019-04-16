@extends('layouts.dashboard')

@section('content')
    <div id="demo">
        <div class="card">
            <div class="card-title">
                <h1>Update Dashboard</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive-vertical shadow-z-1">
                    <!-- Table starts here -->
                    <table id="table" class="table table-hover table-mc-light-blue">
                        <h2>Current Information</h2>
                        <thead>
                        <tr>
                            <th>Announcement Description</th>
                            <th>Announcement Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($announcements as $announcement)
                            <tr>
                                <td data-title="ID">{{$announcement->announcement_desc}}</td>
                                <td data-title="Name">{{$announcement->announcement_date }}</td>
                                <td>
                                    <button class="btn btn-danger" onclick="deleteInstructor({{ $announcement->id }});">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                        <h2>Update Information</h2>
                        <div class="form-row" id="addForm" >
                            <span>Announcement</span>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Announcement Description" id="announcement_desc">
                            </div>
                            <span>Date</span>
                            <div class="col">
                                <input type="date" class="form-control" placeholder="Date" id="announcement_date">
                            </div>

                            <button class="btn btn-primary" onclick="saveEdit();">Update</button>


                        </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function saveEdit() {
            console.log('test');
            let desc = $("#announcement_desc").val();
            let date  = $("#announcement_date").val();

            if ( desc !== "" && date !== ""){

                let url = "/announcement/edit";

                let data = {
                    "announcement_desc": desc,
                    "announcement_date": date
                };


                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    data: data,
                    success: function (resultData) {
                        console.log(resultData);
                    },
                    error: function (jXHR, textStatus, errorThrown) {
                        console.log(errorThrown);
                        console.log(textStatus);
                        console.log(jXHR);

                    },
                    dataType: "JSON"
                });

                $("#announcement_desc").val("") ;
                $("#announcement_date").val("");

            }
            else{
                alert("Please fill all the fields ");
            }
        }
    </script>
@endsection