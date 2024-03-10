<div>
    <canvas id="amount-closed"></canvas>
</div>


<!-- chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const amount_closed = () => {

    const ctx = document.getElementById('amount-closed');
    const data = {
        labels: ['Total', 'Closed'],
        datasets: [{
            label: '# of Votes',
            data: [23, 19],
            borderWidth: 1
        }]
    }
    const options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }

    const config = {
        type: 'doughnut',
        data: data,
        options: options
    };
    new Chart(ctx, config);
}

amount_closed();
</script>