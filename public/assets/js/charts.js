document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("sales_Chart").getContext("2d");

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
                data: [4000,4200,4300,4100,4000,4700,4900,4300,4700,4900,4100,4000],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                // tension: 1,
            },
            {
                label: "Performed",
                data: [1100, 2500,2100 ,2300, 3100, 2800, 3100, 3500, 3100, 3500 , 3000,3300],
                fill: false,
                borderColor: "blue",
                backgroundColor: "blue",
                // tension: 0.1,
            },
            {
                label: "Billed",
                data: [700, 1000, 1600, 800, 1000,1050, 1100,1300,980,1200,1300,1160],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                // tension: 0.1,
            },
            {
                label: "In recovery",
                data: [500, 800, 1300, 700, 800,750, 900,1050,880,1050,1000,960],
                fill: false,
                borderColor: "red",
                backgroundColor: "red",
                // tension: 0.1,
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
    var ctx = document.getElementById("re_de_stock").getContext("2d");

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
                data: [4000,4200,4300,4100,4000,4700,4900,4300,4700,4900,4100,4000],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                // tension: 1,
            },
            {
                label: "Performed",
                data: [1100, 2500,2100 ,2300, 3100, 2800, 3100, 3500, 3100, 3500 , 3000,3300],
                fill: false,
                borderColor: "blue",
                backgroundColor: "blue",
                // tension: 0.1,
            },
            {
                label: "Billed",
                data: [700, 1000, 1600, 800, 1000,1050, 1100,1300,980,1200,1300,1160],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                // tension: 0.1,
            },
            {
                label: "In recovery",
                data: [500, 800, 1300, 700, 800,750, 900,1050,880,1050,1000,960],
                fill: false,
                borderColor: "red",
                backgroundColor: "red",
                // tension: 0.1,
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
    var ctx = document.getElementById("sales_by_treatment").getContext("2d"); // Change the ID to match your HTML canvas element

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
                data: [2000, 3000, 4000,2000, 3000, 4000,2000, 3000, 4000,2000, 3000, 4000],
                backgroundColor: "blue",
                borderColor: "blue",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 2",
                data: [1500, 2500, 3500, 4500,1500, 2500, 3500, 4500,1500, 2500, 3500, 4500],
                backgroundColor: "grey",
                borderColor: "grey",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 3",
                data: [1000, 2000, 3000, 4000, 5000,1000, 2000, 3000, 4000, 5000,1000, 2000],
                backgroundColor: "yellow",
                borderColor: "yellow",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 4",
                data: [4000, 1000, 6000, 2000, 4000,1000, 2000, 3000, 4000, 5000, 2000, 4000],
                backgroundColor: "skyblue",
                borderColor: "skyblue",
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
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
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
    var ctx = document.getElementById("d_by_cate").getContext("2d"); // Change the ID to match your HTML canvas element

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
                label: "Category 1",
                data: [260, 370, 342,260, 370, 342,260, 370, 342,260, 370, 342],
                backgroundColor: "blue",
                borderColor: "blue",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Category 2",
                data: [234, 245, 106, 108,234, 245, 106, 108,234, 245,234, 245],
                backgroundColor: "grey",
                borderColor: "grey",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Category 3",
                data: [1000, 2000, 3000, 4000, 5000,1000, 2000, 3000, 4000, 5000, 4000, 5000],
                backgroundColor: "yellow",
                borderColor: "yellow",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Category 4",
                data: [4000, 1000, 6000, 2000, 4000,4000, 1000, 6000, 2000, 4000, 2000, 4000],
                backgroundColor: "skyblue",
                borderColor: "skyblue",
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
                    position: 'bottom',
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
    var ctx = document.getElementById("demo_dis").getContext("2d"); // Change the ID to match your HTML canvas element
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
                    position: 'bottom',
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

// done
document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("dis_category").getContext("2d"); // Change the ID to match your HTML canvas element

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
                data: [4000, 1000, 6000, 2000, 4000,4000, 1000, 6000, 2000, 4000, 2000, 4000],
                backgroundColor: "blue",
                borderColor: "blue",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 2",
                data: [1000, 2000, 3000, 4000, 5000,1000, 2000, 3000, 4000, 5000, 4000, 5000],
                backgroundColor: "grey",
                borderColor: "grey",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 3",
                data: [234, 245, 106, 108,234, 245, 106, 108,234, 245,234, 245],
                backgroundColor: "yellow",
                borderColor: "yellow",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 4",
                data: [260, 370, 342,260, 370, 342,260, 370, 342,260, 370, 342],
                backgroundColor: "skyblue",
                borderColor: "skyblue",
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
                        stepSize: 1000,
                        callback: function (value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
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
    var ctx = document.getElementById("comm_treat").getContext("2d");

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

// done
document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("demo_dis").getContext("2d"); // Change the ID to match your HTML canvas element
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
                    position: 'bottom',
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
    var ctx = document.getElementById("invoive").getContext("2d");

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
    var ctx = document.getElementById("pay_deadline").getContext("2d");

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
    var ctx = document.getElementById("report").getContext("2d");

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
                data: [4000,4200,4300,4100,4000,4700,4900,4300,4700,4900,4100,4000],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                // tension: 0.1,
            },
            {
                label: "Orders",
                data: [1100, 2500,2100 ,2300, 3100, 2800, 3100, 3500, 3100, 3500 , 3000,3300],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                tension: 0.1,
            },
            {
                label: "Costs",
                data: [700, 1000, 1600, 800, 1000,1050, 1100,1300,980,1200,1300,1160],
                fill: false,
                borderColor: "red",
                backgroundColor: "red",
                // tension: 0.1,
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
    var ctx = document.getElementById("finance_report").getContext("2d");

    const practitionerLabels = [
        "Praticien 1",
        "Praticien 2",
        "Praticien 3",
        "Praticien 4",
        "Praticien 5",
        "Praticien 6",
        "Praticien 7",
    ];

    const data = {
        labels: practitionerLabels,
        datasets: [
            {
                label: "Income",
                data: [1000, 2000, 3000, 4000, 5000],
                backgroundColor: "skyblue",
                borderColor: "skyblue",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "Expenses",
                data: [5000, 4000, 3000, 1000],
                backgroundColor: "orange",
                borderColor: "orange",
                borderWidth: 1,
                tension: 0.1,
            },
        ],
    };

    const config = {
        type: "bar",
        data: data,
        options: {
            indexAxis: "y",
            elements: {
                bar: {
                    borderWidth: 2,
                },
            },
            responsive: true,
            plugins: {
                legend: {
                    position: "right",
                },
            },
        },
    };

    var myBarChart = new Chart(ctx, config);
});

document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("services").getContext("2d"); // Change the ID to match your HTML canvas element

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
                label: "Private services",
                data: [260, 370, 342],
                backgroundColor: "skyblue",
                borderColor: "skyblue",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "insurances",
                data: [234, 245, 106, 108],
                backgroundColor: "blue",
                borderColor: "blue",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "Social",
                data: [1000, 2000, 3000, 4000, 5000],
                backgroundColor: "#FFD47F",
                borderColor: "#FFD47F",
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
