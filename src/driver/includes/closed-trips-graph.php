<div>
    <div class="flex">
        <select name="booking-year" id="booking-year"
            class="cursor-pointer ms-auto max-w-28 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select>
    </div>

    <hr class="my-2">

    <div class="chart-container">
        <canvas id="amount-cancelled"></canvas>
    </div>
</div>

<style>
.chart-container {
    min-height: 300px;
}
</style>



<!-- chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const bookings = [{
    year: "2023",
    bookings: [{
        month: "January",
        trips: 0
    }, {
        month: "February",
        trips: 21
    }, {
        month: "March",
        trips: 4
    }, {
        month: "April",
        trips: 11
    }, {
        month: "June",
        trips: 6
    }, {
        month: "July",
        trips: 14
    }, {
        month: "August",
        trips: 9
    }, {
        month: "September",
        trips: 19
    }, {
        month: "October",
        trips: 3
    }, {
        month: "November",
        trips: 7
    }, , {
        month: "December",
        trips: 5
    }, ],
}, {
    year: "2024",
    bookings: [{
        month: "January",
        trips: 50
    }, {
        month: "February",
        trips: 3
    }, {
        month: "March",
        trips: 1
    }, {
        month: "April",
        trips: 0
    }, {
        month: "June",
        trips: 0
    }, {
        month: "July",
        trips: 0
    }, {
        month: "August",
        trips: 0
    }, {
        month: "September",
        trips: 0
    }, {
        month: "October",
        trips: 0
    }, {
        month: "November",
        trips: 0
    }, , {
        month: "December",
        trips: 0
    }, ],
}]


class CompletedTrip {
    chart;
    constructor(canvas) {


        const ctx = canvas;
        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                'September',
                'October', 'November', 'December'
            ],
            datasets: [{
                label: 'Number of Trips',
                data: [],
                borderWidth: 1
            }]
        }

        const options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Completed Trips'
                }
            },
            responsive: true,
            maintainAspectRatio: false

        }

        const config = {
            type: 'line',
            data: data,
            options: options
        };

        this.chart = new Chart(ctx, config);
        let no_of_trips = [];

        bookings[0].bookings.forEach(book => {
            no_of_trips.push(book.trips);
        });
        this.update(bookings[0].year, no_of_trips)

    }

    update = (year, data) => {
        this.chart.options.plugins.title.text = `Completed Trips ${year}`;
        this.chart.data.datasets[0].data = data;
        this.chart.update();
    }
}


const closed_trips_graph = () => {
    const ctx_closed_trips = document.getElementById('amount-cancelled');
    const completed = new CompletedTrip(ctx_closed_trips);
    const booking_year = document.querySelector("#booking-year");

    booking_year.addEventListener("change", (e) => {
        let selected_year = e.target.value;
        let data = bookings.find((data) => data.year == selected_year);
        let no_of_trips = [];

        data.bookings.forEach(book => {
            console.log("book: ", book.trips);
            no_of_trips.push(book.trips);
        });
        completed.update(selected_year, no_of_trips)
    });
}

closed_trips_graph();
</script>