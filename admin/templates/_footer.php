    <script src="<?= $url ?>libs/jquery.js"></script>
    <script src="<?= $url ?>libs/js/Chart.min.js"></script>
    <script src="<?= $url ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= $url ?>admin/node_modules/main.js"></script>
    <script>
    	$(document).ready(function(){
                $.ajax({
                    url : "dataset.php",
                    type : "GET",
                    success : function(data){
                        // console.log(data.peserta);

                        var bulan = [];
                        var total = [];
                        var hitCounter = [];

                        $.each(data.peserta, function(index, value) {
                            bulan.push(value.Bulan);
                            total.push(value.Total);
                        });

                        // console.log(bulan, total);

                       var data = {
						    labels: bulan,
						    datasets: [
						        {
						            data: total,
						            backgroundColor: [
						                "#FFCE56",
						                "#ff0f0f",
						                "#FF6384",
						                "#36A2EB"
						            ],
						            hoverBackgroundColor: [
						                "#FFCE56",
						                "#ff0f0f",
						                "#FF6384",
						                "#36A2EB"
						            ]
						        }]
						};

						var ctx = $("#lineChart");

						var myDoughnutChart = new Chart(ctx, {
						    type: 'doughnut',
						    data: data
						});
                    },
                    error : function(data) {
                    	console.log(data);
                    }
                });

                $.ajax({
                	url: 'dataset.php',
                	type: 'GET',
                	success: function (data) {
                		
                		var hitCounter = data.hitCounter,
                			mendaftar = data.mendaftar,
                			terdaftar = data.terdaftar;

                		// console.log(hitCounter, mendaftar, terdaftar);

                		var dataset = {
									    datasets: [{
									        data: [
									            hitCounter,
									            mendaftar,
									            terdaftar,
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
									        "Hit Counter",
									        "Peserta Mendaftar",
									        "Peserta Terdaftar",
									        "Grey",
									        "Blue"
									    ]
									};

						var ctx = $("#polarAreaChart");

						new Chart(ctx, {
						    data: dataset,
						    type: 'polarArea'
						});

						$.ajax({
							url: 'detector.php',
							type: 'GET',
							success: function (res) {

								var OS = [],
									Browser = [],
									total = [];

								$.each(res, function(index, val) {
									 OS.push(val.OS);
									 total.push(val.count);
								});

								var uniqOS = [];
								var uniqCount = [];

								$.each(OS, function(i, el) {
		                             if ($.inArray(el, uniqOS) == -1) { uniqOS.push(el) }
		                        });

		                        $.each(total, function(i, el) {
		                             if ($.inArray(el, uniqCount) == -1) { uniqCount.push(el) }
		                        });

								// console.log(uniqCount);
								var data = {
								    labels: uniqOS,
								    datasets: [
								        {
								            data: uniqCount,
								            backgroundColor: [
								                "#FF6384",
								                "#36A2EB",
								                "#FFCE56",
								                "#ff0f0f"
								            ],
								            hoverBackgroundColor: [
								                "#FF6384",
								                "#36A2EB",
								                "#FFCE56",
								                "#ff0f0f"
								            ]
								        }]
								};

								var ctx = $("#pieChart");

								var myPieChart = new Chart(ctx,{
								    type: 'pie',
								    data: data
								});
							}
						});
						
						$.ajax({
						url: "kejuruanMinat.php",
						method: "GET",
						success: function(data) {
							
							var kejuruan = [];
							var total = [];

							$.each(data, function(index, val) {
								kejuruan.push(val.KEJURUAN);
								total.push(val.TOTAL);
							});

							var chartdata = {
								labels : kejuruan,
								datasets : [{
									label : 'Minat Kejuruan',
									backgroundColor: 'rgba(200,200,200, 0.75)',
									borderColor: 'rgba(200,200,200, 0.75)',
									hoverBackgroundColor: 'rgba(200,200,200, 1)',
									hoverBorderColor: 'rgba(200,200,200, 1)',
									data : total
								}]
							}
							// console.log(chartdata);
							var ctx = $("#barChart");

							var barGraph = new Chart(ctx, {
								type: 'bar',
								data: chartdata
							});

						},
						error: function(data) {
							console.log(data);
						}
					})

                	},
                    error : function(data) {
                    	console.log(data);
                    }
                });


		});
    </script>    
  </body>
</html>