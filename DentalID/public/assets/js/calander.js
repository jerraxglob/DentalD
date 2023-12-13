document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        headerToolbar: {
            left: "prev,next",
            center: "title",
            right: "custombutton",
        },
        customButtons: {
            custombutton: {
                text: "Add New Event",
                icon: "fas fa-plus",
                click: function () {
                    alert("Add new event");
                },
                // className: "my-custom-button",
            },
        },
    });
    calendar.render();
});
