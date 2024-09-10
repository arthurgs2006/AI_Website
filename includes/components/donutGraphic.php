<div class="card ">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            LLM Distributions
        </h3>
    </div>
    <div class="card-body">
        <div class="tab-content p-0">
            <div class="chart tab-pane active" id="bar-chart"
                style="position: relative; height: 300px;">
                <canvas id="donut-chart-canvas" width="300" height="300"></canvas>
            </div>
        </div>
    </div>
    
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('donut-chart-canvas').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['GPT-3', 'GPT-4', 'BERT', 'T5', 'XLNet'],
                datasets: [{
                    label: 'Usage',
                    data: [30, 40, 15, 10, 5], // Example data, adjust as needed
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                            }
                        }
                    }
                }
            }
        });
    });
</script>