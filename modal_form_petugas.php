<?php include('../js/config.php'); ?>
<!-- Delete -->
<div class="modal fade" id="del<?php echo $data['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <?php
                                      					$del=mysqli_query($koneksi,"SELECT * FROM petugas WHERE id_petugas='".$data['id_petugas']."'");
                                      					$deleteData=mysqli_fetch_array($del);
                                      				?>
                                              <div class="container-fluid">
                                                                  <h5><center>Nama: <strong><?php echo $deleteData['nama_petugas']; ?></strong></center></h5>
                                                              </div>
                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                                                                <a href="proses_delete_petugas.php?id=<?php echo $data['id_petugas']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                                                            </div>
                                                                          </div>
                                                                                  </div>
                                                                              </div>
                                                                          <!-- /EndmodalDelete -->

                                                                          <!-- Edit -->
                                                                              <div class="modal fade" id="edit<?php echo $data['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                  <div class="modal-dialog">
                                                                                      <div class="modal-content">
                                                                                          <div class="modal-body">
                                                                          				<?php
                                                                          					$edit=mysqli_query($koneksi,"SELECT * FROM petugas WHERE id_petugas='".$data['id_petugas']."'");
                                                                          					$editData=mysqli_fetch_array($edit);
                                                                                    ?>
                                                                                    <div class="container-fluid">
                                                                                                    <form method="POST" action="proses_edit_petugas.php?id=<?php echo $editData['id_petugas']; ?>">
                                                                                                        <div class="modal-header">
                                                                                                            <h5 class="modal-title">Edit Data Petugas</h5>
                                                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                                <div class="form-group">
                                                                                                                                                            <label class="control-label">Nama:</label>
                                                                                                                                                            <input type="text" name="nama_petugas" class="form-control" value="<?php echo $editData['nama_petugas']; ?>" required>
                                                                                                                                                        </div>
                                                                                                                                                                                <div class="form-group">
                                                                                                                                                                                                            <label class="control-label">Telp:</label>
                                                                                                                                                                                                            <input type="number" name="telp" class="form-control" value="<?php echo $editData['telp']; ?>" required>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <div class="modal-footer">
                                                                                                                                                                                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                                                                                                                                                                                                                                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span>Save</button>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            				</form>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            <!-- /EndmodalEdit -->
