        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Data Tema</h3>
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
                  <a href="#">Home</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Data Tema</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Pilihan Tema</h4>
                        <a href="<?= base_url('admin123/tema/add') ?>"
                                class="btn btn-primary btn-round ms-auto"
                            >
                                <i class="fa fa-plus"></i>
                                Tambah Tema
                        </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="add-row"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr class="text-center">
                            <th>Gambar Tema</th>
                            <th>Nama Tema</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tema as $key => $value) { ?>
                            
                            <tr>
                                <td class="text-center">
                                    <img src="<?= base_url('uploads/tema/'.$value->thumbnail) ?>" alt="" width="300px">
                                </td>
                                <td><?= $value->nama_tema . ' <b style="color: #D94D4D; font-size: 18px;">(' . $value->kode_tema . ')</b>'  ?></td>
                                <td>
                                  <?php if ($value->kategori == 'pf') {
                                    echo 'Premium Foto';
                                  } elseif ($value->kategori == 'pt') {
                                    echo 'Premium Tanpa Foto';
                                  } elseif ($value->kategori == 'sf') {
                                    echo 'Spesial Foto';
                                  } elseif ($value->kategori == 'st') {
                                    echo 'Spesial Tanpa Foto';
                                  } elseif ($value->kategori == 'mf') {
                                    echo 'Minimalis Foto';
                                  } elseif ($value->kategori == 'mt') {
                                    echo 'Minimalis Tanpa Foto';
                                  } ?>
                                </td>
                                <td>
                                    <table style="width: 100%;">
                                        <tr>
                                            <td class="text-left" style="font-size: 18px; font-weight: bold;">Reguler</td>
                                            <td class="text-right"><span class="mr-3" style="    color: #D94D4D; text-decoration: line-through;"><?php echo $value->harga_reg_coret ?></span></td>
                                            <td class="text-right"><?php echo $value->harga_reg ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left" style="font-size: 18px; font-weight: bold;">VIP</td>
                                            <td class="text-right"><span class="mr-3" style="    color: #D94D4D; text-decoration: line-through;"><?php echo $value->harga_vip_coret ?></span></td>
                                            <td class="text-right"><?php echo $value->harga_vip ?></td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="text-center">
                                  <p>
                                    <b>
                                  <?php if ($value->status == 'yes') {
                                    echo 'Ready';
                                  } elseif ($value->status == 'no') {
                                    echo 'Cooming Soon';
                                  } ?>
                                    </b>
                                  </p>
                                  <a class="btn btn-secondary" href="<?php echo base_url(); ?>admin123/tema/edit_status/<?= $value->id_tema ?>">Ubah Status</a>
                                </td>
                                <td class="text-center">
                                    <div class="form-button-action">
                                        <a href="<?php echo base_url(); ?>admin123/tema/edit/<?= $value->id_tema ?>"
                                        class="btn btn-link btn-primary btn-lg"
                                        >
                                        <i class="fa fa-edit" style="font-size: 25px;"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>