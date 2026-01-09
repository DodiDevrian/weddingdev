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
                  <a href="#">Tables</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Datatables</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Pilihan Tema</h4>
                        <a href=""
                                class="btn btn-primary btn-round ms-auto"
                                data-bs-toggle="modal"
                                data-bs-target="#addRowModal"
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
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tema as $key => $value) { ?>
                            
                            <tr>
                                <td class="text-center">
                                    <img src="<?= base_url('uploads/tema/'.$value->thumbnail) ?>" alt="" width="200px">
                                </td>
                                <td><?= $value->nama_tema ?></td>
                                <td><?= $value->kategori_name ?></td>
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
                                        <tr>
                                            <td class="text-left" style="font-size: 18px; font-weight: bold;">VVIP</td>
                                            <td class="text-right"><span class="mr-3" style="    color: #D94D4D; text-decoration: line-through;"><?php echo $value->harga_vvip_coret ?></span></td>
                                            <td class="text-right"><?php echo $value->harga_vvip ?></td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <div class="form-button-action">
                                        <button
                                        type="button"
                                        data-bs-toggle="tooltip"
                                        title=""
                                        class="btn btn-link btn-primary btn-lg"
                                        data-original-title="Edit Task"
                                        >
                                        <i class="fa fa-edit"></i>
                                        </button>
                                        <button
                                        type="button"
                                        data-bs-toggle="tooltip"
                                        title=""
                                        class="btn btn-link btn-danger"
                                        data-original-title="Remove"
                                        >
                                        <i class="fa fa-times"></i>
                                        </button>
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