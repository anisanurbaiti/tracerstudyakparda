<div class="modal fade" id="update_modal<?php echo $result['id_lowongan']?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="update_query.php">
        <div class="modal-header">
          <h3 class="modal-title">Ubah Batas Lowongan Kerja</h3>
        </div>
        <div class="modal-body">
          <div class="col-md-10"></div>
          <div class="col-md-10">
             <div class="form-group">
              <label>Posisi</label>
              <input type="text" name="posisi" value="<?php echo $result['posisi']?>" class="form-control" required="required" />
            </div>
            <div class="form-group">
              <label>Tanggal Buat</label>
              <input type="hidden" name="id_lowongan" value="<?php echo $result['id_lowongan']?>"/>
              <input type="date" name="tanggal_buat" value="<?php echo $result['tanggal_buat']?>" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>Tanggal Berakhir</label>
              <input type="date" name="tanggal_berakhir" value="<?php echo $result['tanggal_berakhir']?>" class="form-control" required="required" />
            </div>
          </div>
        </div>
        <div style="clear:both;"></div>
        <div class="modal-footer">
          <button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Simpan</button>
          <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>