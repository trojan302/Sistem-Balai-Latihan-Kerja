      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; <?= date('Y'); ?> Betta Dev Indonesia, Ltd. 
        &middot; <a href="#">Privacy</a> 
        &middot; <a href="#">Terms</a></p>
      </footer>

    </div>
    <script src="http://localhost/project_blk/node_modules/jquery.js"></script>
    <script src="http://localhost/project_blk/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://localhost/project_blk/node_modules/jquery.dataTables.min.js"></script> 
    <script type="text/javascript" src="http://localhost/project_blk/libs/js/tableExport/tableExport.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/libs/js/tableExport/jquery.base64.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/libs/js/tableExport/html2canvas.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/libs/js/tableExport/jspdf/jspdf.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/libs/js/tableExport/jspdf/libs/base64.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/libs/js/tableExport/jspdf/libs/sprintf.js"></script>
    <script type="text/javascript" src="http://localhost/project_blk/libs/js/tableExport/tableExport.jquery.json"></script>
    <script>
      $(document).ready( function () {
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