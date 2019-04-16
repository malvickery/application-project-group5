@extends('layouts.dashboard')

@section('content')

    <div class="card mt-10" id="mainCard" style="background-color: black; padding:10px">
        <div class="row ">
            <div class="col-md-8 ">
                <h3 class="card-header text-light" id="monthAndYear"></h3>
                <table class="table table-bordered table-responsive-md table-dark " id="calendar">
                    <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                    </thead>

                    <tbody id="cal">
                    </tbody>

                </table>

                <div class="form-inline">
                    <div class="col-sm-2"></div>
                    <button class="btn btn-dark btn-md col-sm-3" id="previous" onclick="previous()">Previous
                    </button>
                    <div class="col-sm-2"></div>
                    <button class="btn btn-dark btn-md col-sm-3" id="next" onclick="next()">Next</button>
                    <div class="col-sm-2"></div>
                </div>
                <form>
                    <h2 class="card-header text-light" onclick="showForm();">Add Event</h2>
                    <div class="form-row" id="addForm" >
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Title" id="eventTitle">
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" placeholder="Date" id="eventDate">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Start Time" id="eventSTime">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="End Time" id="eventETime">
                        </div>

                    </div>
                </form>
                <br>
                <button class="btn btn-primary" onclick="saveEvent();">Save Task</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="model-dialog" role="document">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                        <form>
                            <h2 class="card-header text-light " >Add Event</h2>
                            <div class="form-row">
                                <div class="col-4">
                                    <input type="text" class="form-control" placeholder="Title" id="eventTitle">
                                </div>
                                <div class="col">
                                    <input type="date" class="form-control" placeholder="Date" id="eventDate">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Start Time" id="eventSTime">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="End Time" id="eventETime">
                                </div>

                            </div>
                        </form>
                        </div>
                    </div>

                </div>
                <br><br>
            </div>
            <div class="col-md-4 align-items-center events" id="eventCard">
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        var days       = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var daySmall   = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        var months     = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var monthSmall = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];


        var now          = new Date();
        let currentMonth = now.getMonth();
        let currentYear  = now.getFullYear();
        $("#eventInfo").empty();


        var monthAndYear = document.getElementById("monthAndYear");

        var eventsData;

        showCalendar(currentMonth, currentYear);
        getEvents();


        function next() {
            currentYear  = (currentMonth === 11
            ) ? currentYear + 1 : currentYear;
            currentMonth = (currentMonth + 1
            ) % 12;
            showCalendar(currentMonth, currentYear);
            getEvents();
        }

        function previous() {
            currentYear  = (currentMonth === 0
            ) ? currentYear - 1 : currentYear;
            currentMonth = (currentMonth === 0
            ) ? 11 : currentMonth - 1;
            showCalendar(currentMonth, currentYear);
            getEvents();
        }


        function showCalendar(month, year) {

            var firstDayName = (new Date(year, month)
            ).getDay();
            var monthDays    = 32 - new Date(year, month, 32).getDate();


            var tbl = document.getElementById("cal");

            tbl.innerHTML = "";

            monthAndYear.innerHTML = months[month] + " " + year;

            let date = 1;

            for (let i = 0; i < 6; i++) {
                let row = document.createElement("tr");

                for (let j = 0; j < 7; j++) {
                    if (i === 0 && j < firstDayName) {
                        let cell     = document.createElement("td");
                        let cellText = document.createTextNode("");
                        cell.appendChild(cellText);
                        row.appendChild(cell);
                    }
                    else if (date > monthDays) {
                        break;
                    }
                    else {
                        let cell     = document.createElement("td");
                        let cellText = document.createTextNode(date);
                        if (date === now.getDate() && year === now.getFullYear() && month === now.getMonth()) {
                            cell.classList.add("bg-primary");
                            if ((month + 1
                            ) < 10 && date > 9) {
                                cell.setAttribute("id", "" + year + "-0" + (month + 1
                                ) + "-" + date + "");
                            }
                            else if (date < 10 && (month + 1
                            ) > 9) {
                                cell.setAttribute("id", "" + year + "-" + (month + 1
                                ) + "-0" + date + "");
                            }
                            else if (date < 10 && (month + 1
                            ) < 10) {
                                cell.setAttribute("id", "" + year + "-0" + (month + 1
                                ) + "-0" + date + "");
                            }
                            else {
                                cell.setAttribute("id", "" + year + "-" + (month + 1
                                ) + "-" + date + "");
                            }

                        }

                        if ((month + 1
                        ) < 10 && date > 9) {
                            cell.setAttribute("id", "" + year + "-0" + (month + 1
                            ) + "-" + date + "");
                        }
                        else if (date < 10 && (month + 1
                        ) > 9) {
                            cell.setAttribute("id", "" + year + "-" + (month + 1
                            ) + "-0" + date + "");
                        }
                        else if (date < 10 && (month + 1
                        ) < 10) {
                            cell.setAttribute("id", "" + year + "-0" + (month + 1
                            ) + "-0" + date + "");
                        }
                        else {
                            cell.setAttribute("id", "" + year + "-" + (month + 1
                            ) + "-" + date + "");
                        }
                        cell.appendChild(cellText);
                        row.appendChild(cell);
                        date++;
                    }
                }

                tbl.append(row);


            }


        }


        function saveEvent() {
            let title = $("#eventTitle").val();
            let date  = $("#eventDate").val();
            let sTime = $("#eventSTime").val();
            let eTime = $("#eventETime").val();

            if ( title !== "" && date !== "" && sTime !== "" && eTime !== ""){

                let url = "/calendar/addEvent";

                let data = {
                    "title": title,
                    "date": date,
                    "sTime": sTime,
                    "eTime": eTime,
                    "color": getRandomColor(),
                }


                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    data: data,
                    success: function (resultData) {
                        console.log(resultData);


                        showCalendar(currentMonth, currentYear);
                        getEvents();
                    },
                    error: function (jXHR, textStatus, errorThrown) {
                        console.log(errorThrown);
                        console.log(textStatus);
                        console.log(jXHR);

                    },
                    dataType: "JSON"
                });

                $("#eventTitle").val("") ;
                $("#eventDate").val("");
                $("#eventSTime").val("");
                $("#eventETime").val("");

            }
            else{
                alert("Please fill all the fields ");
            }
        }

        function getEvents() {

            let url = "/calendar/getEvents";
            $.ajax({
                type: "GET",
                url: url,
                success: function (resultData) {

                   

                    eventsData = resultData.msg;

                    displayEvents();

                },
                error: function (jXHR, textStatus, errorThrown) {
                    console.log(errorThrown);
                    console.log(textStatus);
                    console.log(jXHR);

                },
                dataType: "JSON"
            });
        }


        function displayEvents(){
            document.getElementById("eventCard").innerHTML = " ";

            for (let i = 0; i < eventsData.length; i++) {
                $("#cal tr td").each(function () {
                    if (this.id == eventsData[i].training_date) {
                        $("#" + this.id + "").append(`
                        <button class="badge align-self-center" style="background-color:`+ eventsData[i].color + `">E</button> `);
                    }

                });

                var savedDate = (eventsData[i].training_date).replace("-", " ");

                var d = new Date(savedDate);

                $("#eventInfo").append(`<tr><td>` + eventsData[i].ID + `</td><td>` + eventsData[i].title + `</td><td>` + eventsData[i].training_date + `</td><td>` + eventsData[i].time_begins + `</td><td>` + eventsData[i].time_ends + `</td><td><button class="btn btn-danger btn-sm" value="` + eventsData[i].ID + `" onclick="deleteEvent(this); ">Delete Event</button></td></tr>`);

                $(".events").append(`<br><div class="card " style="background-color:`+eventsData[i].color+`; color:white; text-shadow: 1px 1px 1px black; ">
                    <div class="row">
                        <div class="col-md-3" style="font-size:35px; text-align:center">`+ (eventsData[i].training_date).substring(8,10)+`</div>
                        <div class="col-md-7 align-self-center" style="font-size:25px;">`+eventsData[i].title+`</div>
                        <button class="badge align-self-center badge-danger" value="` + eventsData[i].ID + `" onclick="deleteEvent(this); ">X</button> 
                    </div>
                    <div class="row align-self-center ">
                        <div class="col ">`+ days[d.getDay(eventsData[i].training_date)]+`,`+(eventsData[i].training_date).substring(8,10)+` `+ months[d.getMonth(eventsData[i].training_date)]+` `+ (eventsData[i].training_date).substring(0,4) + `</div>
                    </div>
                    <div class="row align-self-center ">
                        <div class="col ">From `+eventsData[i].time_begins+`   to `+ eventsData[i].time_ends+`</div>
                    </div>
                </div>`);
            }
        }

        function deleteEvent(id) {

            if (confirm("Do want to delete this event ?")) {
                let data = {
                    "id": id.value
                }


                let url = "/calendar/deleteEvent";

                $.ajax({
                    type: "POST",
                    url: url,
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: data,
                    success: function (resultData) {
                        if (resultData) {
                            showCalendar(currentMonth, currentYear);
                            getEvents();
                        }

                    },
                    error: function (jXHR, textStatus, errorThrown) {
                        console.log(errorThrown);
                        console.log(textStatus);
                        console.log(jXHR);

                    },
                    dataType: "JSON"
                });
            } else {

            }


        }

        function getRandomColor(){
            var color = "#";
            var digits = "0123456789ABCDEF";

            for(var i = 0; i < 6; i++){
                color += digits[Math.floor(Math.random()* 16)];
            }
            return color;
        }

    </script>
@endsection('content')
