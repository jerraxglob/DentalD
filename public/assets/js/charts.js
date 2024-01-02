document.addEventListener("DOMContentLoaded", function() {
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
        datasets: [{
                label: "Average sales",
                data: [
                    4000, 4200, 4300, 4100, 4000, 4700, 4900, 4300, 4700, 4900,
                    4100, 4000,
                ],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                // tension: 1,
            },
            {
                label: "Performed",
                data: [
                    1100, 2500, 2100, 2300, 3100, 2800, 3100, 3500, 3100, 3500,
                    3000, 3300,
                ],
                fill: false,
                borderColor: "blue",
                backgroundColor: "blue",
                // tension: 0.1,
            },
            {
                label: "Billed",
                data: [
                    700, 1000, 1600, 800, 1000, 1050, 1100, 1300, 980, 1200,
                    1300, 1160,
                ],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                // tension: 0.1,
            },
            {
                label: "In recovery",
                data: [
                    500, 800, 1300, 700, 800, 750, 900, 1050, 880, 1050, 1000,
                    960,
                ],
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
                        callback: function(value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myLineChart = new Chart(ctx, config);
});
document.addEventListener("DOMContentLoaded", function() {
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
        datasets: [{
                label: "Average sales",
                data: [
                    4000, 4200, 4300, 4100, 4000, 4700, 4900, 4300, 4700, 4900,
                    4100, 4000,
                ],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                // tension: 1,
            },
            {
                label: "Performed",
                data: [
                    1100, 2500, 2100, 2300, 3100, 2800, 3100, 3500, 3100, 3500,
                    3000, 3300,
                ],
                fill: false,
                borderColor: "blue",
                backgroundColor: "blue",
                // tension: 0.1,
            },
            {
                label: "Billed",
                data: [
                    700, 1000, 1600, 800, 1000, 1050, 1100, 1300, 980, 1200,
                    1300, 1160,
                ],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                // tension: 0.1,
            },
            {
                label: "In recovery",
                data: [
                    500, 800, 1300, 700, 800, 750, 900, 1050, 880, 1050, 1000,
                    960,
                ],
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
                        callback: function(value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myLineChart = new Chart(ctx, config);
});

document.addEventListener("DOMContentLoaded", function() {
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
        datasets: [{
                label: "Treatment category 1",
                data: [
                    2000, 3000, 4000, 2000, 3000, 4000, 2000, 3000, 4000, 2000,
                    3000, 4000,
                ],
                backgroundColor: "blue",
                borderColor: "blue",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 2",
                data: [
                    1500, 2500, 3500, 4500, 1500, 2500, 3500, 4500, 1500, 2500,
                    3500, 4500,
                ],
                backgroundColor: "grey",
                borderColor: "grey",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 3",
                data: [
                    1000, 2000, 3000, 4000, 5000, 1000, 2000, 3000, 4000, 5000,
                    1000, 2000,
                ],
                backgroundColor: "yellow",
                borderColor: "yellow",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 4",
                data: [
                    4000, 1000, 6000, 2000, 4000, 1000, 2000, 3000, 4000, 5000,
                    2000, 4000,
                ],
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
                        callback: function(value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                    position: "bottom",
                },
                datalabels: {
                    anchor: "end",
                    align: "end",
                    formatter: function(value, context) {
                        return value.y + "%";
                    },
                },
            },
        },
    };

    var myBarChart = new Chart(ctx, config);
});
document.addEventListener("DOMContentLoaded", function() {
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
        datasets: [{
                label: "Category 1",
                data: [
                    260, 370, 342, 260, 370, 342, 260, 370, 342, 260, 370, 342,
                ],
                backgroundColor: "blue",
                borderColor: "blue",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Category 2",
                data: [
                    234, 245, 106, 108, 234, 245, 106, 108, 234, 245, 234, 245,
                ],
                backgroundColor: "grey",
                borderColor: "grey",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Category 3",
                data: [
                    1000, 2000, 3000, 4000, 5000, 1000, 2000, 3000, 4000, 5000,
                    4000, 5000,
                ],
                backgroundColor: "yellow",
                borderColor: "yellow",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Category 4",
                data: [
                    4000, 1000, 6000, 2000, 4000, 4000, 1000, 6000, 2000, 4000,
                    2000, 4000,
                ],
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
                        callback: function(value, index, values) {
                            return value === 0 ? value : value / 100 + "yo";
                        },
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                    position: "bottom",
                },
                datalabels: {
                    anchor: "end",
                    align: "end",
                    formatter: function(value, context) {
                        return value.y + "%";
                    },
                },
            },
        },
    };

    var myBarChart = new Chart(ctx, config);
});

// done
document.addEventListener("DOMContentLoaded", function() {
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

        datasets: [{
                label: "Treatment category 1",
                data: [
                    4000, 1000, 6000, 2000, 4000, 4000, 1000, 6000, 2000, 4000,
                    2000, 4000,
                ],
                backgroundColor: "blue",
                borderColor: "blue",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 2",
                data: [
                    1000, 2000, 3000, 4000, 5000, 1000, 2000, 3000, 4000, 5000,
                    4000, 5000,
                ],
                backgroundColor: "grey",
                borderColor: "grey",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 3",
                data: [
                    234, 245, 106, 108, 234, 245, 106, 108, 234, 245, 234, 245,
                ],
                backgroundColor: "yellow",
                borderColor: "yellow",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Treatment category 4",
                data: [
                    260, 370, 342, 260, 370, 342, 260, 370, 342, 260, 370, 342,
                ],
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
                        callback: function(value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                    position: "bottom",
                },
                datalabels: {
                    anchor: "end",
                    align: "end",
                    formatter: function(value, context) {
                        return value.y + "%";
                    },
                },
            },
        },
    };
    var myBarChart = new Chart(ctx, config);
});

document.addEventListener("DOMContentLoaded", function() {
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
        datasets: [{
                label: "Treatment code 1",
                data: [
                    4000, 4200, 4300, 4100, 4000, 4700, 4900, 4300, 4700, 4900,
                    4100, 4000,
                ],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                tension: 0.1,
            },
            {
                label: "Treatment code 2",
                data: [
                    1100, 2500, 2100, 2300, 3100, 2800, 3100, 3500, 3100, 3500,
                    3000, 3300,
                ],
                fill: false,
                borderColor: "blue",
                backgroundColor: "blue",
                tension: 0.1,
            },
            {
                label: "Treatment code 3",
                data: [
                    700, 1000, 1600, 800, 1000, 1050, 1100, 1300, 980, 1200,
                    1300, 1160,
                ],
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
                        callback: function(value, index, values) {
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
    var ctx = document.getElementById("demo_dis").getContext("2d");
    const monthNames = ["","","Women","","", "","","Men","",""];

    const labels = monthNames.slice(0, 10);
    const data = {
        labels: labels,
        datasets: [{
                label: "Women",
                data: [5000,4500,3500,6000,1500], // Two bars for "Women" in the "W" column
                backgroundColor: ["#EB9A37", "#EB9A37"], // Color for each bar
                borderColor: "#EB9A37",
                borderWidth: 5,
                tension: 0.1,
            },
            {
                label: "Men",
                data: [null,null,null,null,null, 5300,3500,6000,1500,9000], // One bar for "Men" in the "M" column
                backgroundColor: ["#50C2F6"], // Color for the bar
                borderColor: "#50C2F6",
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
                        callback: function(value, index, values) {
                            return value === 0 ? value : value / 100 + "yo";
                        },
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                    position: "bottom",
                },
                datalabels: {
                    anchor: "end",
                    align: "end",
                    formatter: function(value, context) {
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
        datasets: [{
                label: "Open invoices",
                data: [
                    4000, 4200, 4300, 4100, 4000, 4700, 4900, 4300, 4700, 4900,
                    4100, 4000,
                ],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                tension: 0.1,
            },
            {
                label: "Pending payment",
                data: [
                    1100, 2500, 2100, 2300, 3100, 2800, 3100, 3500, 3100, 3500,
                    3000, 3300,
                ],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                tension: 0.1,
            },
            {
                label: "Unpaid invoices",
                data: [
                    700, 1000, 1600, 800, 1000, 1050, 1100, 1300, 980, 1200,
                    1300, 1160,
                ],
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
                        callback: function(value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myLineChart = new Chart(ctx, config);
});
document.addEventListener("DOMContentLoaded", function() {
    var ctx = document.getElementById("pay_deadline").getContext("2d");

    const monthNames = [
        "1 Month",
        "2 Months",
        "3 Months",
        "4 Months",
        "5 Months",
        "6 Months",
    ];
    const labels = monthNames.slice(0, 6);
    const data = [];
    const data2 = [];
    let prev = 100;
    let prev2 = 80;
    for (let i = 0; i < 1000; i++) {
        prev += 5 - Math.random() * 10;
        data.push({ x: i, y: prev });
        prev2 += 5 - Math.random() * 10;
        data2.push({ x: i, y: prev2 });
    }
    const totalDuration = 10000;
    const delayBetweenPoints = totalDuration / data.length;
    const previousY = (ctx) =>
        ctx.index === 0 ?
        ctx.chart.scales.y.getPixelForValue(100) :
        ctx.chart
        .getDatasetMeta(ctx.datasetIndex)
        .data[ctx.index - 1].getProps(["y"], true).y;
    const animation = {
        x: {
            type: "number",
            easing: "linear",
            duration: delayBetweenPoints,
            from: NaN,
            delay(ctx) {
                if (ctx.type !== "data" || ctx.xStarted) {
                    return 0;
                }
                ctx.xStarted = true;
                return ctx.index * delayBetweenPoints;
            },
        },
        y: {
            type: "number",
            easing: "linear",
            duration: delayBetweenPoints,
            from: previousY,
            delay(ctx) {
                if (ctx.type !== "data" || ctx.yStarted) {
                    return 0;
                }
                ctx.yStarted = true;
                return ctx.index * delayBetweenPoints;
            },
        },
    };
    const config = {
        type: "line",
        data: {
            labels: labels,
            datasets: [{
                    borderColor: "skyblue",
                    borderWidth: 1,
                    radius: 0,
                    data: data,
                },
                {
                    borderColor: "black",
                    borderWidth: 1,
                    radius: 0,
                    data: data2,
                },
            ],
        },
        options: {
            animation,
            interaction: {
                intersect: false,
            },
            plugins: {
                legend: false,
            },
            scales: {
                x: {
                    type: "linear",
                },
                y: {
                    type: "linear",
                },
            },
        },
    };

    var myLineChart = new Chart(ctx, config);
});

document.addEventListener("DOMContentLoaded", function() {
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
        datasets: [{
                label: "Inventory size",
                data: [
                    4000, 4200, 4300, 4100, 4000, 4700, 4900, 4300, 4700, 4900,
                    4100, 4000,
                ],
                fill: false,
                borderColor: "black",
                backgroundColor: "black",
                // tension: 0.1,
            },
            {
                label: "Orders",
                data: [
                    1100, 2500, 2100, 2300, 3100, 2800, 3100, 3500, 3100, 3500,
                    3000, 3300,
                ],
                fill: false,
                borderColor: "skyblue",
                backgroundColor: "skyblue",
                tension: 0.1,
            },
            {
                label: "Costs",
                data: [
                    700, 1000, 1600, 800, 1000, 1050, 1100, 1300, 980, 1200,
                    1300, 1160,
                ],
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
                        callback: function(value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
        },
    };

    var myLineChart = new Chart(ctx, config);
});

document.addEventListener("DOMContentLoaded", function() {
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
        datasets: [{
                label: "Income",
                data: [
                    { x: 8000, y: 4, indexLabel: "\u2605 Highest" },
                    { x: 7000, y: 4, indexLabel: "\u2605 Highest" },
                    { x: 5000, y: 4, indexLabel: "\u2605 Highest" },
                    { x: 8000, y: 4, indexLabel: "\u2605 Highest" },
                    { x: 6000, y: 4, indexLabel: "\u2605 Highest" },
                ],
                backgroundColor: "#50C2F6",
                borderColor: "#50C2F6",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "Expenses",
                data: [5000, 4000, 3000, 1000, 3000, 1000],
                backgroundColor: "#EB9A37",
                borderColor: "#EB9A37",
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

document.addEventListener("DOMContentLoaded", function() {
    var ctx = document.getElementById("services").getContext("2d"); // Change the ID to match your HTML canvas element

    const monthNames = [""];

    const labels = monthNames.slice(0, 12);
    const data = {
        labels: labels,
        datasets: [{
                label: "Private services",
                data: [2600],
                backgroundColor: "#50C2F6",
                borderColor: "#50C2F6",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "insurances",
                data: [1200],
                backgroundColor: "#93C0CF",
                borderColor: "#93C0CF",
                borderWidth: 1,
                tension: 0.1,
            },
            {
                label: "Social",
                data: [5000],
                backgroundColor: "#F4EB99",
                borderColor: "#F4EB99",
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
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1000,
                        callback: function(value, index, values) {
                            return value === 0 ? value : value / 1000 + "k";
                        },
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                    position: "bottom",
                },
                datalabels: {
                    anchor: "end",
                    align: "end",
                    formatter: function(value, context) {
                        return value.y + "%";
                    },
                },
            },
        },
    };

    var myBarChart = new Chart(ctx, config);
});