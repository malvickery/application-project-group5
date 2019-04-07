var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
var daySmall = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var monthSmall = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];


var now = new Date();
let currentMonth = now.getMonth();
let currentYear = now.getFullYear();
$("#eventInfo").empty();


var monthAndYear = document.getElementById("monthAndYear");

var eventsData;

showCalendar(currentMonth, currentYear);
getEvents();


function next() {
    currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
    getEvents();
}

function previous() {
    currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
    currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    showCalendar(currentMonth, currentYear);
    getEvents();
}


function showCalendar(month, year){

    var firstDayName = (new Date(year, month)).getDay();
    var monthDays = 32 - new Date(year, month, 32).getDate();


    var tbl = document.getElementById("cal");

    tbl.innerHTML="";

    monthAndYear.innerHTML = months[month] + " " + year;

    let date = 1;

    for(let i = 0; i < 6 ; i++){
        let row = document.createElement("tr");

        for (let j =0 ; j< 7 ; j ++){
            if (i === 0 && j < firstDayName) {
                let cell = document.createElement("td");
                let cellText = document.createTextNode("");
                cell.appendChild(cellText);
                row.appendChild(cell);
            }
            else if (date > monthDays) {
                break;
            }
            else {
                let cell = document.createElement("td");
                let cellText = document.createTextNode(date);
                if (date === now.getDate() && year === now.getFullYear() && month === now.getMonth() ) {
                    cell.classList.add("bg-info");
                    if((month+1)< 10 && date > 9){
                        cell.setAttribute("id",""+year+"-0"+(month+1)+"-"+date+"");
                    }
                    else if(date < 10 && (month+1) > 9){
                        cell.setAttribute("id",""+year+"-"+(month+1)+"-0"+date+"");
                    }
                    else if (date < 10 && (month+1) < 10){
                        cell.setAttribute("id",""+year+"-0"+(month+1)+"-0"+date+"");
                    }
                    else{
                        cell.setAttribute("id",""+year+"-"+(month+1)+"-"+date+"");
                    }

                }

                if((month+1)< 10 && date > 9){
                    cell.setAttribute("id",""+year+"-0"+(month+1)+"-"+date+"");
                }
                else if(date < 10 && (month+1) > 9){
                    cell.setAttribute("id",""+year+"-"+(month+1)+"-0"+date+"");
                }
                else if (date < 10 && (month+1) < 10){
                    cell.setAttribute("id",""+year+"-0"+(month+1)+"-0"+date+"");
                }
                else{
                    cell.setAttribute("id",""+year+"-"+(month+1)+"-"+date+"");
                }
                cell.appendChild(cellText);
                row.appendChild(cell);
                date++;
            }
        }

        tbl.append(row);



    }



}


function saveEvent(){
    let title = $("#eventTitle").val();
    let date = $("#eventDate").val();
    let sTime = $("#eventSTime").val();
    let eTime = $("#eventETime").val();

    console.log(title);

    let url = "saveEvents.php";

    let data = {
        "title":title,
        "date":date,
        "sTime":sTime,
        "eTime":eTime
    }


    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(resultData){
            console.log(resultData);


            showCalendar(currentMonth, currentYear);
            getEvents();
        },
        error:function (jXHR, textStatus, errorThrown){
            console.log(errorThrown);
            console.log(textStatus);
            console.log(jXHR);

        },
        dataType: "JSON"
    });
}

function getEvents(){

    let url = "/app/getEvents.php";
    $.ajax({
        type: "GET",
        url: url,
        success: function(resultData){

            eventsData = resultData.events;

            displayEvents();

            //showCalendar();
        },
        error:function (jXHR, textStatus, errorThrown){
            console.log(errorThrown);
            console.log(textStatus);
            console.log(jXHR);

        },
        dataType: "JSON"
    });
}


function displayEvents(){
    document.getElementById("eventInfo").innerHTML = " ";
    for(let i =0; i < eventsData.length;i++){
        $("#cal tr td").each(function(){
            if(this.id == eventsData[i].training_date){
                $("#"+this.id+"").append(`
                <button type="button" class="btn btn-danger btn-sm" title>
                `+ eventsData[i].title +`
              </button>
                `);
                console.log(this.id);


            }

        });

        $("#eventInfo").append(`
        <tr><td>`+ eventsData[i].ID +`</td><td>`+ eventsData[i].title +`</td><td>`+ eventsData[i].training_date +`</td><td>`+ eventsData[i].time_begins +`</td><td>`+ eventsData[i].time_ends +`</td><td><button class="btn btn-danger btn-sm" value="`+ eventsData[i].ID  +`" onclick="deleteEvent(this); ">Delete Event</button></td></tr>
    `);
    }

}

function deleteEvent(id){

    if (confirm("Do want to delete this event ?")) {
        let data = {
            "id":id.value
        }


        let url = "/appdeleteEvent.php";

        $.ajax({
            type: "POST",
            url: url,
            data:data,
            success: function(resultData){
                if(resultData){
                    showCalendar(currentMonth, currentYear);
                    getEvents();
                }

            },
            error:function (jXHR, textStatus, errorThrown){
                console.log(errorThrown);
                console.log(textStatus);
                console.log(jXHR);

            },
            dataType: "JSON"
        });
    } else {

    }


}





