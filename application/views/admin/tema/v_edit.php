<div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Forms</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Tema</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Tambah Tema</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Form Tambah Tema</div>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($error_upload)) {
                            echo '<div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
                        }

                        echo form_open_multipart('admin123/tema/edit/'.$tema->id_tema);
                        ?>

                        <div class="form-floating form-floating-custom mb-3">
                            <input
                            type="text"
                            class="form-control"
                            id="floatingInput"
                            placeholder="Nama Tema"
                            name="nama_tema"
                            value="<?= $tema->nama_tema ?>"
                            />
                            <label for="floatingInput">Nama Tema</label>
                        </div>
                        <div class="form-floating form-floating-custom mb-3">
                            <input
                            type="text"
                            class="form-control"
                            id="floatingInput"
                            placeholder="Kode Tema"
                            name="kode_tema"
                            value="<?= $tema->kode_tema ?>"
                            />
                            <label for="floatingInput">Kode Tema</label>
                        </div>

                        <div class="form-floating form-floating-custom mb-3">
                            <select
                            class="form-select"
                            id="selectFloatingLabel"
                            name="kategori"
                            required
                            >
                                <option value="<?= $tema->kategori ?>">
                                    <?php 
                                    if ($tema->kategori == "pf") {
                                        echo "Premium Foto";
                                    } elseif ($tema->kategori == "pt") {
                                        echo "Premium Tanpa Foto";
                                    } elseif ($tema->kategori == "sf") {
                                        echo "Spesial Foto";
                                    } elseif ($tema->kategori == "st") {
                                        echo "Spesial Tanpa Foto";
                                    } elseif ($tema->kategori == "mf") {
                                        echo "Minimalis Foto";
                                    } elseif ($tema->kategori == "mt") {
                                        echo "Minimalis Tanpa Foto";
                                    }
                                    ?>
                                </option>
                                <option value="pf">Premium Foto</option>
                                <option value="pt">Premium Tanpa Foto</option>
                                <option value="sf">Spesial Foto</option>
                                <option value="st">Spesial Tanpa Foto</option>
                                <option value="mf">Minimalis Foto</option>
                                <option value="mt">Minimalis Tanpa Foto</option>
                            </select>
                            <label for="selectFloatingLabel">Kategori</label>
                        </div>

                        <div class="form-floating form-floating-custom mb-3">
                            <input
                            type="text"
                            class="form-control"
                            id="floatingInput"
                            placeholder="Harga Reguler Coret"
                            name="harga_reg_coret"
                            value="<?= $tema->harga_reg_coret ?>"
                            />
                            <label for="floatingInput">Harga Reguler Coret</label>
                        </div>
                        
                        <div class="form-floating form-floating-custom mb-3">
                            <input
                            type="text"
                            class="form-control"
                            id="floatingInput"
                            placeholder="Harga Reguler"
                            value="<?= $tema->harga_reg ?>"
                            name="harga_reg"
                            />
                            <label for="floatingInput">Harga Reguler</label>
                        </div>

                        <div class="form-floating form-floating-custom mb-3">
                            <input
                            type="text"
                            class="form-control"
                            id="floatingInput"
                            placeholder="Harga VIP Coret"
                            name="harga_vip_coret"
                            value="<?= $tema->harga_vip_coret ?>"
                            />
                            <label for="floatingInput">Harga VIP Coret</label>
                        </div>

                        <div class="form-floating form-floating-custom mb-3">
                            <input
                            type="text"
                            class="form-control"
                            id="floatingInput"
                            placeholder="Harga VIP"
                            name="harga_vip"
                            value="<?= $tema->harga_vip ?>"
                            />
                            <label for="floatingInput">Harga VIP</label>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1"
                            >Masukkan Gambar Thumbnail</label
                            >
                            <input
                            type="file"
                            class="form-control-file"
                            id="exampleFormControlFile1"
                            name="thumbnail"
                            />
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>

                </div>
              </div>
            </div>
          </div>
        </div>