    <script src="http://anonymous/libs/jquery.js"></script>
    <script src="http://anonymous/chartJS/js/Chart.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/main.js"></script>
    <script>
    	$(document).ready(function() {

			var data = {
			    labels: ["January", "February", "March", "April", "May", "June", "July", "Augustus", "September","Oktober", "November","Desember"],
			    datasets: [
			        {
			            label: "My First dataset",
			            fill: false,
			            lineTension: 0.1,
			            backgroundColor: "rgba(75,192,192,1)",
			            borderColor: "rgba(75,192,192,1)",
			            borderCapStyle: 'butt',
			            borderDash: [],
			            borderDashOffset: 0.0,
			            borderJoinStyle: 'miter',
			            pointBorderColor: "rgba(75,192,192,1)",
			            pointBackgroundColor: "#fff",
			            pointBorderWidth: 1,
			            pointHoverRadius: 5,
			            pointHoverBackgroundColor: "rgba(75,192,192,1)",
			            pointHoverBorderColor: "rgba(220,220,220,1)",
			            pointHoverBorderWidth: 2,
			            pointRadius: 1,
			            pointHitRadius: 10,
			            data: [65, 59, 80, 81, 56, 55, 40, 80, 81, 56, 55, 40],
			            spanGaps: false,
			        },
			        {
			            label: "My Second dataset",
			            fill: false,
			            lineTension: 0.1,
			            backgroundColor: "rgba(0, 56, 240, 1)",
			            borderColor: "rgba(0, 56, 240, 1)",
			            borderCapStyle: 'butt',
			            borderDash: [],
			            borderDashOffset: 0.0,
			            borderJoinStyle: 'miter',
			            pointBorderColor: "rgba(0, 56, 240, 1)",
			            pointBackgroundColor: "#fff",
			            pointBorderWidth: 1,
			            pointHoverRadius: 5,
			            pointHoverBackgroundColor: "rgba(0, 56, 240, 1)",
			            pointHoverBorderColor: "rgba(220,220,220,1)",
			            pointHoverBorderWidth: 2,
			            pointRadius: 1,
			            pointHitRadius: 10,
			            data: [33, 67, 63, 99, 78, 46, 100, 33, 67, 63, 99, 95],
			            spanGaps: false,
			        },
			        {
			            label: "My Three dataset",
			            fill: false,
			            lineTension: 0.1,
			            backgroundColor: "rgba(133, 0, 250, 1)",
			            borderColor: "rgba(133, 0, 250, 1)",
			            borderCapStyle: 'butt',
			            borderDash: [],
			            borderDashOffset: 0.0,
			            borderJoinStyle: 'miter',
			            pointBorderColor: "rgba(133, 0, 250, 1)",
			            pointBackgroundColor: "#fff",
			            pointBorderWidth: 1,
			            pointHoverRadius: 5,
			            pointHoverBackgroundColor: "rgba(133, 0, 250, 1)",
			            pointHoverBorderColor: "rgba(220,220,220,1)",
			            pointHoverBorderWidth: 2,
			            pointRadius: 1,
			            pointHitRadius: 10,
			            data: [25, 78, 83, 91, 98, 86, 79, 78, 83, 91, 98, 86],
			            spanGaps: false,
			        }
			    ]
			};

			var ctx = $("#mapping");

			var myLineChart = new Chart(ctx, {
			    type: 'line',
			    data: data
			});

			var dataset = {
			    datasets: [{
			        data: [
			            11,
			            16,
			            7,
			            3,
			            14
			        ],
			        backgroundColor: [
			            "#FF6384",
			            "#4BC0C0",
			            "#FFCE56",
			            "#E7E9ED",
			            "#36A2EB"
			        ],
			        label: 'My dataset' // for legend
			    }],
			    labels: [
			        "Red",
			        "Green",
			        "Yellow",
			        "Grey",
			        "Blue"
			    ]
			};

			var ctx = $("#polarAreaChart");

			new Chart(ctx, {
			    data: dataset,
			    type: 'polarArea'
			});


		});
    </script>    
  </body>
</html>