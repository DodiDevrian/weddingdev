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
                  <a href="#">Forms</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Basic Form</a>
                </li>
              </ul>
            </div>
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('admin123/member/add_reg');
            ?>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form Elements</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <label>URL Link</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Enter URL Link"
                            name="url_link"
                          />
                        </div>

                        <div class="form-group">
                          <label for="exampleFormControlSelect1"
                            >Pilih Tema</label
                          >
                          <select
                            class="form-select"
                            id="exampleFormControlSelect1"
                            name="kode_tema"
                          >
                          <?php foreach ($tema as $key => $value) {  ?>
                            <option value="<?php echo $value->kode_tema; ?>"><?php echo $value->nama_tema; ?></option>
                          <?php } ?>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Nama Lengkap Laki-laki</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Enter Nama Lengkap"
                            name="nama_laki"
                          />
                        </div>

                        <div class="form-group">
                          <label>Nama Lengkap Perempuan</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Enter Nama Lengkap"
                            name="nama_prm"
                          />

                    </div>
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