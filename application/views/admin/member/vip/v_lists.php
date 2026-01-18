        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Data Member</h3>
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
                  <a href="#">Member</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Reguler</a>
                </li>
              </ul>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Member Reguler</h4>
                        <a href="<?= base_url('admin123/member/add_reg') ?>"
                                class="btn btn-primary btn-round ms-auto"
                            >
                                <i class="fa fa-plus"></i>
                                Tambah Member
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
                            <th>URL Link</th>
                            <th>Tema Yang Dipesan</th>
                            <th>Nama Pria</th>
                            <th>Nama Wanita</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($member as $key => $value) { ?>
                            <?php if ($value->role == 'vip') { ?>
                            <tr>
                                <td class="text-center">
                                    <?= $value->url_link ?>
                                </td>
                                <td><?= $value->nama_tema . ' <b style="color: #D94D4D; font-size: 18px;">(' . $value->kode_tema . ')</b>'  ?></td>
                                <td><?= $value->nama_laki ?></td>
                                <td><?= $value->nama_prm ?></td>
                                <td class="text-center">
                                    <div class="form-button-action">
                                        <a href="<?php echo base_url(); ?>admin123/member/detail_reg/<?= $value->id_member ?>"
                                        class="btn btn-link btn-primary btn-lg"
                                        >
                                        <i class="fa fa-arrow-right" style="font-size: 25px;"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php  } ?>
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