<div>
    <div class="text-end">
        <select name="booking-year" id="booking-year">
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
        </select>
    </div>

    <canvas id="amount-cancelled"></canvas>
</div>



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
        trips: 4
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
    constructor() {

        const ctx = document.getElementById('amount-cancelled');
        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                'September',
                'October', 'November', 'December'
            ],
            datasets: [{
                label: 'Number of Trips',
                // data: [12, 19, 3, 5, 2, 7, 10, 3, 5, 10, 1, 4],
                data: [12, 19, 3, 5, 2, 7, 10, 3, 5, 10, 1, 4],
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
            }

        }

        const config = {
            type: 'line',
            data: data,
            options: options
        };

        this.chart = new Chart(ctx, config);

        // this.update(bookings[0].year, bookings[0].bookings)

    }

    update = (year, data) => {
        // console.log("data: ", data)
        // console.log("this.chart: ", this.chart)
        // console.log("this.chart.data.datasets[0].data: ", this.chart.data.datasets[0].data)
        this.chart.options.plugins.title.text = `Completed Trips ${year}`;
        this.chart.data.datasets[0].data = data;
        this.chart.update();
    }
}

const completed = new CompletedTrip();

const booking_year = document.querySelector("#booking-year");
booking_year.addEventListener("change", (e) => {

    console.log("e.target.value: ", e.target.value)
    let selected_year = e.target.value;

    let data = bookings.find((data) => data.year == selected_year);
    console.log("data: ", data)
    let no_of_trips = [];
    data.bookings.forEach(book => {
        console.log("book: ", book.trips);
        no_of_trips.push(book.trips)

    });
    console.log("no_of_trips: ", no_of_trips)

    completed.update(selected_year, no_of_trips)
});
</script>