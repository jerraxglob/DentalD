document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        headerToolbar: {
            left: "prev,next",
            center: "title",
            right: "customButton",
        },
        customButtons: {
            customButton: {
                text: "Add New Event",
                click: function () {
                    alert("Add new event");
                },
            },
        },
        buttonText: {
            today: "Today",
            month: "Month",
            week: "Week",
            day: "Day",
        },
    });

    calendar.render();
});
