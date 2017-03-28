      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; <?= date('Y'); ?> K.N.Fadhilah
        &middot; <a href="#">Privacy</a> 
        &middot; <a href="#">Terms</a></p>
      </footer>

    </div>
    <script src="http://localhost/project_blk/v.1.0.3/node_modules/jquery.js"></script>
    <script src="http://localhost/project_blk/v.1.0.3/libs/js/Chart.min.js"></script>
    <script src="http://localhost/project_blk/v.1.0.3/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://localhost/project_blk/v.1.0.3/node_modules/jquery.dataTables.min.js"></script> 
    <script type="text/javascript" src="http://localhost/project_blk/v.1.0.3/libs/js/tableExport/tableExport.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/v.1.0.3/libs/js/tableExport/jquery.base64.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/v.1.0.3/libs/js/tableExport/html2canvas.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/v.1.0.3/libs/js/tableExport/jspdf/jspdf.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/v.1.0.3/libs/js/tableExport/jspdf/libs/base64.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/v.1.0.3/libs/js/tableExport/jspdf/libs/sprintf.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/v.1.0.3/libs/js/tableExport/tableExport.jquery.json"></script>
    <script>
      $(document).ready( function () {

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
                              terdaftar
                          ],
                          backgroundColor: [
                              "#FF6384",
                              "#4BC0C0",
                              "#FFCE56"
                          ],
                          label: 'My dataset' // for legend
                      }],
                      labels: [
                          "Hit Counter",
                          "Peserta Mendaftar",
                          "Peserta Terdaftar"
                      ]
                  };

            var ctx = $("#polarAreaChart");

            new Chart(ctx, {
                data: dataset,
                type: 'polarArea'
            });
          },

          error: function(data) {
            console.log(dataset);
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
          });

          $('#table-peserta-per-kejuruan').DataTable();   

          $('#png').click(function(e) {
              $('#table-peserta-per-kejuruan').tableExport({
                  type: 'png',
                  escape: 'false'
              });
          });

          $('#csv').click(function(e) {
              $('#table-peserta-per-kejuruan').tableExport({
                  type: 'csv',
                  escape: 'false'
              });
          });

          $('#sql').click(function(e) {
              $('#table-peserta-per-kejuruan').tableExport({
                  type: 'sql',
                  escape: 'false'
              });
          });

          $('#word').click(function(e) {
              $('#table-peserta-per-kejuruan').tableExport({
                  type: 'doc',
                  escape: 'false'
              });
          });

          $('#excel').click(function(e) {
              $('#table-peserta-per-kejuruan').tableExport({
                  type: 'excel',
                  escape: 'false'
              });
          });

          function printData() {
             var divToPrint = document.getElementById("table-peserta-per-kejuruan");
             newWin= window.open("");
             newWin.document.write(divToPrint.outerHTML);
             newWin.print();
             newWin.close();
          }

          $('#btn-print').on('click',function(){
            printData();
          })
      } );
    </script>
  </body>
</html>