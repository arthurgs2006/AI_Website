<div class="card">
    <div class="card-header border-0">
        <div class="d-flex justify-content-between">
            <h3 class="card-title">Online Store Visitors</h3>
            <a href="javascript:void(0);">View Report</a>
        </div>
    </div>
    <div class="card-body">
        <div class="d-flex">
            <p class="d-flex flex-column">
                <span class="text-bold text-lg">820</span>
                <span>Visitors Over Time</span>
            </p>
            <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                    <i class="fas fa-arrow-up"></i> 12.5%
                </span>
                <span class="text-muted">Since last week</span>
            </p>
        </div>
        <div class="position-relative mb-4">
            <canvas id="visitors-chart" height="200"></canvas>
        </div>

        <div class="d-flex flex-row justify-content-end">
            <span class="mr-2">
                <i class="fas fa-square text-primary"></i> This Week
            </span>

            <span>
                <i class="fas fa-square text-gray"></i> Last Week
            </span>
        </div>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/linkedScripts.php' ?>
<script>
    var ctx = document.getElementById('visitors-chart').getContext('2d');
    var visitorsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            datasets: [{
                label: 'This Week',
                backgroundColor: 'rgba(60,141,188,0.1)', // Light blue background
                borderColor: '#3c8dbc', // Blue border
                pointRadius: 5,
                pointColor: '#3c8dbc',
                pointStrokeColor: '#3c8dbc',
                pointHighlightFill: '#fff',
                pointHighlightStroke: '#3c8dbc',
                data: [120, 150, 180, 200, 170, 210, 250] // Data for "This Week"
            },
            {
                label: 'Last Week',
                backgroundColor: 'rgba(210,214,222,0.1)', // Light gray background
                borderColor: '#c1c7d1', // Gray border
                pointRadius: 5,
                pointColor: '#c1c7d1',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: '#c1c7d1',
                data: [100, 130, 170, 190, 160, 180, 220] // Data for "Last Week"
            }
        ]
    },
    options: {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: true
                    }
                }]
            }
        }
    });
</script>