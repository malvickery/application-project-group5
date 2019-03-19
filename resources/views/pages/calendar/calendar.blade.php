<div class="col-4"></div>
<div class="col">
    <h3 class="card-header" id="monthAndYear"></h3>
    <table class="table table-bordered table-responsive-md" id="calendar">
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
    <br><br>

    <div class="form-inline">
        <div class="col-sm-3"></div>
        <button class="btn btn-outline-dark btn-md col-sm-3" id="previous" onclick="previous()">Previous</button>
        <button class="btn btn-outline-dark btn-md col-sm-3" id="next" onclick="next()">Next</button>
        <div class="col-sm-3"></div>
    </div>
    <br><br>

    <form>

        <h2 class="card-header">Add Event</h2>
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
    <br>
    <button class="btn btn-primary" onclick="saveEvent();">Save Task</button>
    <br><br>
    <h3 class="card-header">Event List</h3>
    <table class="table table-bordered table-responsive-md" id="events">
        <thead>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Date</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody id="eventInfo">

        </tbody>
    </table>
</div>
<div class="col-4"></div>
