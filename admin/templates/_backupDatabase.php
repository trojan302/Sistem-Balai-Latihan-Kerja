<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <h2><i class="glyphicon glyphicon-cloud-download"></i> Susunan Backup </h2>
      <hr>

      <?php if (isset($_GET['err'])) { ?>
            
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>admin/backups'">&times;</span></button>
          <?= $_GET['err'] ?>
        </div>

      <?php } ?>

      <?php if (isset($_GET['success'])) { ?>
        
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>admin/backups?listBackup=true'">&times;</span></button>
          <?= $_GET['success'] ?>
        </div>

      <?php } ?>

      <form action="<?= $url ?>admin/config/backupConfig.php" method="POST" class="container-fluid">
        <div class="form-group">
          <label><i class="glyphicon glyphicon-calendar"></i> Waktu Backups</label>
          <br>
          <select name="tanggalBackup" required>
            <option value="">-- Tanggal --</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          <select name="bulanBackup" required>
            <option value="">-- Bulan --</option>
            <option value="01">Januari</option>
            <option value="02">Februari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
          </select>
          <select name="backupTahun" required>
            <option value="">-- Tahun --</option>
            <?php for ($i = date('Y'); $i <= date('Y')+5; $i++) { ?>
                <option value="<?= $i; ?>"><?= $i; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="namaFile" placeholder="Nama File Backups" class="form-control" required>
        </div>
        <button type="sumbit" class="btn btn-default"><i class="glyphicon glyphicon-wrench"></i> Set Backups</button>
      </form>
      
  </div>
</div>