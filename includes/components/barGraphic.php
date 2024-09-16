 <div class="card">
     <div class="card-header">
         <h3 class="card-title">
             <i class="fas fa-chart-pie mr-1"></i>
             LLM Usage
         </h3>
     </div>
     <div class="card-body">
         <div class="tab-content p-0">
             <div class="chart tab-pane active" id="bar-chart"
                 style="position: relative; height: 300px;">
                 <canvas id="bar-chart-canvas" width="245"
                     style="height: 300px;"></canvas>
             </div>
         </div>
     </div>
 </div>

 <script>
     document.addEventListener('DOMContentLoaded', function() {
         var ctxBar = document.getElementById('bar-chart-canvas').getContext('2d');
         new Chart(ctxBar, {
             type: 'bar',
             data: {
                 labels: ['GPT-3', 'GPT-4', 'BERT', 'T5', 'XLNet'],
                 datasets: [{
                     label: 'Usage',
                     data: [60, 80, 42, 55, 45],
                     backgroundColor: 'rgba(54, 162, 235, 0.2)',
                     borderColor: 'rgba(54, 162, 235, 1)',
                     borderWidth: 1
                 }]
             },
             options: {
                 responsive: true,
                 maintainAspectRatio: false
             }
         });
         var ctxDonut = document.getElementById('donut-chart-canvas').getContext('2d');
         new Chart(ctxDonut, {
             type: 'doughnut',
             data: {
                 labels: ['GPT-3', 'GPT-4', 'BERT', 'T5', 'XLNet'],
                 datasets: [{
                     label: 'Usage',
                     data: [25, 35, 15, 15, 10],
                     backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)'],
                     borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)'],
                     borderWidth: 1
                 }]
             },
             options: {
                 responsive: true,
                 maintainAspectRatio: false
             }
         });
     });
 </script>