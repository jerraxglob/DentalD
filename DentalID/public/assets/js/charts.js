document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("myLineChart").getContext("2d");

    const monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ];

    const labels = monthNames.slice(0, 12);
    const data = {
        labels: labels,
        datasets: [
            {
                label: "Average sales",
                data: [2000, 3000, 4000],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                tension: 0.1,
            },
            {
                label: "Performed",
                data: [1500, 2500, 3500, 4500],
                fill: false,
                borderColor: "blue",
                backgroundColor: "blue",
                tension: 0.1,
            },
            {
                label: "Billed",
                data: [4000, 1000, 6000, 2000, 4000],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                tension: 0.1,
            },
            {
                label: "In recovery",
                data: [560, 300, 430, 230, 600],
                fill: false,
                borderColor: "red",
                backgroundColor: "red",
                tension: 0.1,
            },
        ],
    };

    const config = {
        type: "line",
        data: data,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: "linear",
                    from: 1,
                    to: 0,
                    loop: true,
                    responsive: true,
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myLineChart = new Chart(ctx, config);
});
document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("linechart").getContext("2d");

    const monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ];

    const labels = monthNames.slice(0, 12);
    const data = {
        labels: labels,
        datasets: [
            {
                label: "Average sales",
                data: [2000, 3000, 4000],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                tension: 0.1,
            },
            {
                label: "Performed",
                data: [1500, 2500, 3500, 4500],
                fill: false,
                borderColor: "blue",
                backgroundColor: "blue",
                tension: 0.1,
            },
            {
                label: "Billed",
                data: [1000, 2000, 3000, 4000, 5000],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                tension: 0.1,
            },
            {
                label: "In recovery",
                data: [4000, 1000, 6000, 2000, 4000],
                fill: false,
                borderColor: "red",
                backgroundColor: "red",
                tension: 0.1,
            },
        ],
    };

    const config = {
        type: "line",
        data: data,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: "linear",
                    from: 1,
                    to: 0,
                    loop: true,
                    responsive: true,
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myLineChart = new Chart(ctx, config);
});

document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("barchart").getContext("2d"); // Change the ID to match your HTML canvas element

    const monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ];

    const labels = monthNames.slice(0, 12);
    const data = {
        labels: labels,
        datasets: [
            {
                label: "Treatment category 1",
                data: [2000, 3000, 4000],
                backgroundColor: "blue",
                borderColor: "blue",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "Treatment category 2",
                data: [1500, 2500, 3500, 4500],
                backgroundColor: "grey",
                borderColor: "grey",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "Treatment category 3",
                data: [1000, 2000, 3000, 4000, 5000],
                backgroundColor: "yellow",
                borderColor: "yellow",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "Treatment category 4",
                data: [4000, 1000, 6000, 2000, 4000],
                backgroundColor: "skyblue",
                borderColor: "skyblue",
                borderWidth: 1,
                tension: 0.1,
            },
        ],
    };

    const config = {
        type: "bar",
        data: data,
        options: {
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myBarChart = new Chart(ctx, config);
});
document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("barchart2").getContext("2d"); // Change the ID to match your HTML canvas element

    const monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ];

    const labels = monthNames.slice(0, 12);
    const data = {
        labels: labels,
        datasets: [
            {
                label: "Treatment category 1",
                data: [260, 370, 342],
                backgroundColor: "blue",
                borderColor: "blue",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "Treatment category 2",
                data: [234, 245, 106, 108],
                backgroundColor: "grey",
                borderColor: "grey",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "Treatment category 3",
                data: [1000, 2000, 3000, 4000, 5000],
                backgroundColor: "yellow",
                borderColor: "yellow",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "Treatment category 4",
                data: [4000, 1000, 6000, 2000, 4000],
                backgroundColor: "skyblue",
                borderColor: "skyblue",
                borderWidth: 1,
                tension: 0.1,
            },
        ],
    };

    const config = {
        type: "bar",
        data: data,
        options: {
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myBarChart = new Chart(ctx, config);
});

document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("line_chart").getContext("2d");

    const monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ];

    const labels = monthNames.slice(0, 12);
    const data = {
        labels: labels,
        datasets: [
            {
                label: "Treatment code 1",
                data: [2000, 3000, 4000],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                tension: 0.1,
            },
            {
                label: "Treatment code 2",
                data: [1500, 2500, 3500, 4500],
                fill: false,
                borderColor: "blue",
                backgroundColor: "blue",
                tension: 0.1,
            },
            {
                label: "Treatment code 3",
                data: [1000, 2000, 3000, 4000, 5000],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                tension: 0.1,
            },
        ],
    };

    const config = {
        type: "line",
        data: data,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: "linear",
                    from: 1,
                    to: 0,
                    loop: true,
                    responsive: true,
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myLineChart = new Chart(ctx, config);
});

document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("barchart_3").getContext("2d"); // Change the ID to match your HTML canvas element

    const monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ];

    const labels = monthNames.slice(0, 12);
    const data = {
        labels: labels,
        datasets: [
            {
                label: "Woman",
                data: [6000, 5000, 3000],
                backgroundColor: "orange",
                borderColor: "orange",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Man",
                data: [5000, 6000, 3000, 4000],
                backgroundColor: "blue",
                borderColor: "blue",
                borderWidth: 5,
                tension: 0.1,
            },
        ],
    };

    const config = {
        type: "bar",
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 100,
                        callback: function (value, index, values) {
                            return value === 0 ? value : value / 100 + "yo";
                        },
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                },
                datalabels: {
                    anchor: "end",
                    align: "end",
                    formatter: function (value, context) {
                        return value.y + "%";
                    },
                },
            },
        },
    };

    var myBarChart = new Chart(ctx, config);
});

document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("line_chart1").getContext("2d");

    const monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ];

    const labels = monthNames.slice(0, 12);
    const data = {
        labels: labels,
        datasets: [
            {
                label: "Open invoices",
                data: [2000, 3000, 4000],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                tension: 0.1,
            },
            {
                label: "Pending payment",
                data: [1500, 2500, 3500, 4500],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                tension: 0.1,
            },
            {
                label: "Unpaid invoices",
                data: [1000, 2000, 3000, 4000, 5000],
                fill: false,
                borderColor: "red",
                backgroundColor: "red",
                tension: 0.1,
            },
        ],
    };

    const config = {
        type: "line",
        data: data,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: "linear",
                    from: 1,
                    to: 0,

                    responsive: true,
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myLineChart = new Chart(ctx, config);
});
document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("line_chart2").getContext("2d");

    const monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ];

    const labels = monthNames.slice(0, 12);
    const data = {
        labels: labels,
        datasets: [
            {
                label: "private",
                data: [2000, 3000, 4000],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                tension: 0.1,
            },
            {
                label: "public",
                data: [1500, 2500, 3500, 4500],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                tension: 0.1,
            },
        ],
    };

    const config = {
        type: "line",
        data: data,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: "easeInOutBounce",
                    from: 1,
                    to: 0,

                    responsive: true,
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myLineChart = new Chart(ctx, config);
});
document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("repot").getContext("2d");

    const monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ];

    const labels = monthNames.slice(0, 12);
    const data = {
        labels: labels,
        datasets: [
            {
                label: "Inventory size",
                data: [2000, 3000, 4000],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                tension: 0.1,
            },
            {
                label: "Orders",
                data: [1500, 2500, 3500, 4500],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                tension: 0.1,
            },
            {
                label: "Costs",
                data: [1000, 2000, 3000, 4000, 5000],
                fill: false,
                borderColor: "red",
                backgroundColor: "red",
                tension: 0.1,
            },
        ],
    };

    const config = {
        type: "line",
        data: data,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: "linear",
                    from: 1,
                    to: 0,
                    loop: true,
                    responsive: true,
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myLineChart = new Chart(ctx, config);
});
