<form action="<?= base_url('Formulir/add') ?>" method="POST" enctype="multipart/form-data">
          <div class="input-group mb-3">
                    <select class="form-control" id="provinsi" name="provinsi">
                      <option selected="selected">-- Pilih Provinsi --</option>
                      <?php foreach($provinsi as $value) {
                          // echo '<option >'.$value['nama'].'</option>';
                          echo '<option value="'.$value['id'].'">'.$value['nama'].'</option>';
                        } ?>
                    </select>
          </div>
          <div class="input-group mb-3">
                    <select class="form-control" id="kota" name="kota">
                      <option selected="selected">Kab/Kota</option>
                      <option selected="selected">-- Pilih Provinsi --</option>
                      <?php foreach($kota as $value) {
                          // echo '<option >'.$value['nama'].'</option>';
                          echo '<option value="'.$value['id_provinsi'].'">'.$value['nama'].'</option>';
                        } ?>
                      
                    </select>
          </div>
          <div class="input-group mb-3">
                    <select class="form-control" id="kecamatan" name="kecamatan">
                      <option selected="selected">Kecamatan</option>
                      <option>Perempuan</option>
                    </select>
          </div>
          <div class="input-group mb-3">
                    <select class="form-control" id="kelurahan" name="kelurahan">
                      <option selected="selected">Kelurahan</option>
                      <option>Perempuan</option>
                    </select>
          </div>
          <!-- <div class="input-group mr">
            <div class="form-group ">
              <textarea class="form-control" placeholder="Alamat"></textarea>
            </div>
          </div> -->

          <div class="col-4">
          <button type="submit" class="btn btn-success">SAVE</button>
          </div>
          
        </form>