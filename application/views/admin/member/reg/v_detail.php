<?php $this->session->set_userdata('detail_member_reg', current_url()); ?>

<div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3"><?= $member->url_link ?></h3>
                <h6 class="op-7 mb-2">Data bisa diubah dihalaman ini</h6>
              </div>
            </div>
                <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                    echo $this->session->flashdata('pesan');
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>';
                    echo '</div>';
                }
                ?>
            <div class="row">
              <div class="col-md-6">
                <div class="card" style="height: -webkit-fill-available;">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Data Diri</div>
                      <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#datadiri">
                            Ubah Data Diri
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                        <table>
                            <tr>
                                <td>Nama Mempelai Pria</td>
                                <td> : </td>
                                <td><?= $member->nama_laki ?></td>
                            </tr>
                            <tr>
                                <td>Nama Mempelai Wanita</td>
                                <td> : </td>
                                <td><?= $member->nama_prm ?></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>Panggilan Mempelai Pria</td>
                                <td> : </td>
                                <td><?= $member->pgl_laki ?></td>
                            </tr>
                            <tr>
                                <td>Panggilan Mempelai Wanita</td>
                                <td> : </td>
                                <td><?= $member->pgl_prm ?></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>Inisial Mempelai Pria</td>
                                <td> : </td>
                                <td><?= $member->init_laki ?></td>
                            </tr>
                            <tr>
                                <td>Inisial Mempelai Wanita</td>
                                <td> : </td>
                                <td><?= $member->init_prm ?></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>Nama Ayah Mempelai Pria</td>
                                <td> : </td>
                                <td><?= $member->ayah_laki ?></td>
                            </tr>
                            <tr>
                                <td>Nama Ibu Mempelai Pria</td>
                                <td> : </td>
                                <td><?= $member->ibu_laki ?></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>Nama Ayah Mempelai Wanita</td>
                                <td> : </td>
                                <td><?= $member->ayah_prm ?></td>
                            </tr>
                            <tr>
                                <td>Nama Ibu Mempelai Wanita</td>
                                <td> : </td>
                                <td><?= $member->ibu_prm ?></td>
                        </table>
                    </div>
                    <div class="modal fade" id="datadiri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Diri</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open('admin123/member/edit_datadiri_reg/' . $member->id_member); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="url_link">URL Link</label>
                                            <input type="text" class="form-control" id="url_link" name="url_link" value="<?= $member->url_link ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_laki">Nama Mempelai Pria</label>
                                            <input type="text" class="form-control" id="nama_laki" name="nama_laki" value="<?= $member->nama_laki ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_prm">Nama Mempelai Wanita</label>
                                            <input type="text" class="form-control" id="nama_prm" name="nama_prm" value="<?= $member->nama_prm ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pgl_laki">Panggilan Mempelai Pria</label>
                                            <input type="text" class="form-control" id="pgl_laki" name="pgl_laki" value="<?= $member->pgl_laki ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pgl_prm">Panggilan Mempelai Wanita</label>
                                            <input type="text" class="form-control" id="pgl_prm" name="pgl_prm" value="<?= $member->pgl_prm ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="init_laki">Inisial Mempelai Pria</label>
                                            <input type="text" class="form-control" id="init_laki" name="init_laki" value="<?= $member->init_laki ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="init_prm">Inisial Mempelai Wanita</label>
                                            <input type="text" class="form-control" id="init_prm" name="init_prm" value="<?= $member->init_prm ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ayah_laki">Nama Ayah Mempelai Pria</label>
                                            <input type="text" class="form-control" id="ayah_laki" name="ayah_laki" value="<?= $member->ayah_laki ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="ibu_laki">Nama Ibu Mempelai Pria</label>
                                            <input type="text" class="form-control" id="ibu_laki" name="ibu_laki" value="<?= $member->ibu_laki ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ayah_prm">Nama Ayah Mempelai Wanita</label>
                                            <input type="text" class="form-control" id="ayah_prm" name="ayah_prm" value="<?= $member->ayah_prm ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="ibu_prm">Nama Ibu Mempelai Wanita</label>
                                            <input type="text" class="form-control" id="ibu_prm" name="ibu_prm" value="<?= $member->ibu_prm ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Data Acara</div>
                      <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dataacara">
                            Ubah Data Acara
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table-sm" style="width: -webkit-fill-available;">
                        <tr>
                            <td>Acara Pernikahan</td>
                            <td> : </td>
                            <td><?= date('d M Y, H:i', strtotime($member->tgl_acara)) ?></td>
                            <td>Akad / Pemberkatan</td>
                            <td> : </td>
                            <td><?= $member->akad_or_berkat ?></td>
                        </tr>
                        <tr>
                            <td>Acara Akad/Pemberkatan</td>
                            <td> : </td>
                            <td><?= date('d M Y, H:i', strtotime($member->tgl_akad)) ?></td>
                            <td>Acara Resepsi</td>
                            <td> : </td>
                            <td><?= date('d M Y, H:i', strtotime($member->tgl_resepsi)) ?></td>
                        </tr>
                        <tr>
                            <td>Lokasi Akad/Pemberkatan</td>
                            <td> : </td>
                            <td>
                                <?php if ($member->lokasi_akad == '') {
                                    echo '<label style="color: red;">Belum diatur</label>';
                                } else {
                                    echo '<a class="btn btn-secondary btn-sm" href="' . $member->lokasi_akad . '" target="_blank">Lokasi</a>';
                                } ?>
                            </td>
                            <td>Lokasi Resepsi</td>
                            <td> : </td>
                            <td>
                                <?php if ($member->lokasi_resepsi == '') {
                                    echo '<label style="color: red;">Belum diatur</label>';
                                } else {
                                    echo '<a class="btn btn-secondary btn-sm" href="' . $member->lokasi_resepsi . '" target="_blank">Lokasi</a>';
                                } ?>
                            </td>
                        </tr>
                    </table>
                    <div class="modal fade" id="dataacara" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Acara</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open('admin123/member/edit_dataacara_reg/' . $member->id_member); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="exampleFormControlSelect1">Akada atau Pemberkatan</label>
                                          <select
                                            class="form-select"
                                            id="exampleFormControlSelect1"
                                            name="akad_or_berkat"
                                          >
                                          <?php if ($member->akad_or_berkat == '') { ?>
                                            <option value="Akad Nikah">Akad Nikah</option>
                                            <option value="Pemberkatan">Pemberkatan</option>
                                          <?php }elseif ($member->akad_or_berkat == 'Akad Nikah') { ?>
                                            <option value="Akad Nikah" selected>Akad Nikah</option>
                                            <option value="Pemberkatan">Pemberkatan</option>
                                          <?php }elseif ($member->akad_or_berkat == 'Pemberkatan') { ?>
                                            <option value="Akad Nikah">Akad Nikah</option>
                                            <option value="Pemberkatan" selected>Pemberkatan</option>
                                          <?php } ?>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Tanggal Acara Pernikahan</label>
                                            <input type="date" name="tgl_acara" class="form-control" value="<?= $member->tgl_acara ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Tanggal Akad / Pemberkatan</label>
                                            <input type="datetime-local" name="tgl_akad" class="form-control" value="<?= $member->tgl_akad ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Link Map Lokasi Akad</label>
                                            <input type="text" class="form-control" id="lokasi_akad" name="lokasi_akad" value="<?= $member->lokasi_akad ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Tanggal Resepsi</label>
                                            <input type="datetime-local" name="tgl_resepsi" class="form-control" value="<?= $member->tgl_resepsi ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Link Map Lokasi Resepsi</label>
                                            <input type="text" class="form-control" id="lokasi_resepsi" name="lokasi_resepsi" value="<?= $member->lokasi_resepsi ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Data Gift</div>
                      <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#datagift">
                            Ubah Data Gift
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table>
                        <tr>
                            <td>Bank</td>
                            <td> : </td>
                            <td><?= $member->bank ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Rekening</td>
                            <td> : </td>
                            <td><?= $member->rekening ?></td>
                        </tr>
                        <tr>
                            <td>E-wallet</td>
                            <td> : </td>
                            <td><?= $member->ewallet ?></td>
                        </tr>
                        <tr>
                            <td>Nomor E-wallet</td>
                            <td> : </td>
                            <td><?= $member->no_ewallet ?></td>
                        </tr>
                        <tr>
                            <td>Nama Penerima</td>
                            <td> : </td>
                            <td><?= $member->penerima ?></td>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td> : </td>
                            <td><?= $member->no_hp ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Penerima</td>
                            <td> : </td>
                            <td><?= $member->alamat_penerima ?></td>
                        </tr>
                    </table>
                    <div class="modal fade" id="datagift" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Gift</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open('admin123/member/edit_datagift_reg/' . $member->id_member); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="exampleFormControlSelect1">Pilih Bank</label>
                                          <select
                                            class="form-select"
                                            id="exampleFormControlSelect1"
                                            name="bank"
                                          >
                                            <option value="<?= $member->bank ?>"><?= $member->bank ?></option>
                                            <option value="BCA">BCA</option>
                                            <option value="BNI">BNI</option>
                                            <option value="BRI">BRI</option>
                                            <option value="MANDIRI">MANDIRI</option>
                                            <option value="SEABANK">SEABANK</option>
                                            <option value="PERMATA">PERMATA</option>
                                            <option value="BSI">BSI</option>
                                            <option value="BTN">BTN</option>
                                            <option value="CIMB">CIMB</option>
                                          </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Nomor Rekening</label>
                                            <input type="text" name="rekening" class="form-control" value="<?= $member->rekening ?>">
                                        </div>

                                        <div class="form-group">
                                          <label for="exampleFormControlSelect1">Pilih E-Wallet</label>
                                          <select
                                            class="form-select"
                                            id="exampleFormControlSelect1"
                                            name="ewallet"
                                          >
                                            <option value="<?= $member->ewallet ?>"><?= $member->ewallet ?></option>
                                            <option value="DANA">DANA</option>
                                            <option value="OVO">OVO</option>
                                            <option value="GOPAY">GOPAY</option>
                                            <option value="LINKAJA">LINKAJA</option>
                                            <option value="ShopeePay">ShopeePay</option>

                                          </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Nomor E-Wallet</label>
                                            <input type="text" name="no_ewallet" class="form-control" value="<?= $member->no_ewallet ?>">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Nama Penerima</label>
                                            <input type="text" class="form-control" id="penerima" name="penerima" value="<?= $member->penerima ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nomor HP</label>
                                            <input type="text" name="no_hp" class="form-control" value="<?= $member->no_hp ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Alamat Penerima</label>
                                            <input type="text" class="form-control" name="alamat_penerima" value="<?= $member->alamat_penerima ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="card bg-light">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Love Story</div>
                      <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lovestory">
                            Ubah Love Story
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card">
                      <div class="card-header">
                        Love Story 1 (Pertemuan)
                      </div>
                      <div class="card-body">
                        <blockquote class="blockquote mb-0">
                          <p><?= $member->love_st1 ?></p>
                        </blockquote>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header">
                        Love Story 2 (Lamaran)
                      </div>
                      <div class="card-body">
                        <blockquote class="blockquote mb-0">
                          <p><?= $member->love_st2 ?></p>
                        </blockquote>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header">
                        Love Story 3 (Pernikahan)
                      </div>
                      <div class="card-body">
                        <blockquote class="blockquote mb-0">
                          <p><?= $member->love_st3 ?></p>
                        </blockquote>
                      </div>
                    </div>
                    <div class="modal fade" id="lovestory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Love Story</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open('admin123/member/edit_datalovest_reg/' . $member->id_member); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="comment">Love Story 1 (Pertemuan)</label>
                                          <textarea class="form-control" id="comment" rows="5" name="love_st1"><?= $member->love_st1 ?></textarea>
                                        </div>

                                        <div class="form-group">
                                          <label for="comment">Love Story 2 (Lamaran)</label>
                                          <textarea class="form-control" id="comment" rows="5" name="love_st2"><?= $member->love_st2 ?></textarea>
                                        </div>

                                        <div class="form-group">
                                          <label for="comment">Love Story 3 (Pernikahan)</label>
                                          <textarea class="form-control" id="comment" rows="5" name="love_st3"><?= $member->love_st3 ?></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card" style="height: -webkit-fill-available;">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Akun Medsos</div>
                      <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#medsos">
                            Ubah Akun Medsos
                          </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table" style="width: max-content;">
                        <tr>
                            <td>Instagram Mempelai Pria</td>
                            <td> : </td>
                            <td><?= $member->ig_laki ?></td>
                            <?php if ($member->ig_laki != '') { ?>
                            <td><a class="btn btn-sm btn-secondary" target="_blank" href="https://www.instagram.com/<?= $member->ig_laki ?>">Go to <i class="fab fa-instagram"></i></a></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Instagram Mempelai Wanita</td>
                            <td> : </td>
                            <td><?= $member->ig_prm ?></td>
                            <?php if ($member->ig_prm != '') { ?>
                            <td><a class="btn btn-sm btn-secondary" target="_blank" href="https://www.instagram.com/<?= $member->ig_prm ?>">Go to <i class="fab fa-instagram"></i></a></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Instagram Live Streaming</td>
                            <td> : </td>
                            <td><?= $member->ig_live ?></td>
                            <?php if ($member->ig_live != '') { ?>
                            <td><a class="btn btn-sm btn-secondary" target="_blank" href="https://www.instagram.com/<?= $member->ig_live ?>">Go to <i class="fab fa-instagram"></i></a></td>
                            <?php } ?>
                        </tr>
                    </table>
                    <div class="modal fade" id="medsos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Ubah Data Medsos</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <?php echo form_open('admin123/member/edit_datamedsos_reg/' . $member->id_member); ?>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label class="form-label">Username IG Mempelai Pria</label>
                                          <input type="text" class="form-control" id="ig_laki" name="ig_laki" value="<?= $member->ig_laki ?>">
                                      </div>
                                      <div class="form-group">
                                          <label class="form-label">Username IG Mempelai Wanita</label>
                                          <input type="text" class="form-control" id="ig_prm" name="ig_prm" value="<?= $member->ig_prm ?>">
                                      </div>
                                      <div class="form-group">
                                          <label class="form-label">Username IG Live Streaming</label>
                                          <input type="text" class="form-control" id="ig_live" name="ig_live" value="<?= $member->ig_live ?>">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                          <?php echo form_close(); ?>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Data Foto Mempelai</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mt-2">
                        <div class="text-center">
                          <?php if ($member->foto_laki != '') { ?>
                            <img width="60%" src="<?= base_url('uploads/foto/' . $member->foto_laki) ?>" alt="Foto Laki-laki" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 60%;
                              margin: auto;
                              height: 400px;
                              background-color: #f0f0f0;
                              display: flex;
                              align-items: center;
                              justify-content: center;
                            ">
                              <span class="text-muted">Foto Tidak Tersedia</span>
                            </div>
                          <?php  } ?>

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotolaki">Ubah Foto Laki</button>

                          <div class="modal fade" id="ubahfotolaki" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto Laki-laki</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_laki != '') { ?>
                                    <img width="60%" src="<?= base_url('uploads/foto/' . $member->foto_laki) ?>" alt="Foto Laki-laki" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 60%;
                                      margin: auto;
                                      height: 400px;
                                      background-color: #f0f0f0;
                                      display: flex;
                                      align-items: center;
                                      justify-content: center;
                                    ">
                                      <span class="text-muted">Foto Tidak Tersedia</span>
                                    </div>
                                    <?php  } ?>
                                  </div>

                                  <?php echo form_open_multipart('admin123/member/edit_fotolaki/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto Mempelai Pria</label>
                                      <input type="file" class="form-control" name="foto_laki" value="<?= $member->foto_laki ?>">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                <?php echo form_close(); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt-2">
                        <div class="text-center">
                          <?php if ($member->foto_prm != '') { ?>
                            <img width="60%" src="<?= base_url('uploads/foto/' . $member->foto_prm) ?>" alt="Foto Perempuan" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 60%;
                              margin: auto;
                              height: 400px;
                              background-color: #f0f0f0;
                              display: flex;
                              align-items: center;
                              justify-content: center;
                            ">
                              <span class="text-muted">Foto Tidak Tersedia</span>
                            </div>
                          <?php  } ?>
                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoprm">Ubah Foto Perempuan</button>

                          <div class="modal fade" id="ubahfotoprm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto Perempuan</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_prm != '') { ?>
                                    <img width="60%" src="<?= base_url('uploads/foto/' . $member->foto_prm) ?>" alt="Foto Perempuan" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 60%;
                                      margin: auto;
                                      height: 400px;
                                      background-color: #f0f0f0;
                                      display: flex;
                                      align-items: center;
                                      justify-content: center;
                                    ">
                                      <span class="text-muted">Foto Tidak Tersedia</span>
                                    </div>
                                    <?php  } ?>
                                  </div>

                                  <?php echo form_open_multipart('admin123/member/edit_fotoprm/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto Mempelai Perempuan</label>
                                      <input type="file" class="form-control" name="foto_prm" value="<?= $member->foto_prm ?>">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                <?php echo form_close(); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Foto Cover</div>
                  </div>
                  <div class="card-body mt-2">
                    <div class="text-center">
                      <?php if ($member->foto_cover != '') { ?>
                            <img width="60%" src="<?= base_url('uploads/foto/' . $member->foto_cover) ?>" alt="Foto Cover" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 60%;
                              margin: auto;
                              height: 400px;
                              background-color: #f0f0f0;
                              display: flex;
                              align-items: center;
                              justify-content: center;
                            ">
                              <span class="text-muted">Foto Tidak Tersedia</span>
                            </div>
                          <?php  } ?>
                      <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotocover">Ubah Foto Cover</button>
                      <div class="modal fade" id="ubahfotocover" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Ubah Foto Cover</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="text-start mb-4">
                                <label for="">Foto Saat Ini</label>
                                <?php if ($member->foto_cover != '') { ?>
                                <img width="60%" src="<?= base_url('uploads/foto/' . $member->foto_cover) ?>" alt="Foto Cover" class="img-fluid rounded"
                                style="
                                height: 400px;
                                object-fit: cover;
                                object-position: center;
                                "><br>
                                <?php  } else { ?>
                                <div style="
                                  width: 60%;
                                  margin: auto;
                                  height: 400px;
                                  background-color: #f0f0f0;
                                  display: flex;
                                  align-items: center;
                                  justify-content: center;
                                ">
                                  <span class="text-muted">Foto Tidak Tersedia</span>
                                </div>
                                <?php  } ?>
                              </div>

                              <?php echo form_open_multipart('admin123/member/edit_fotocover/' . $member->id_member); ?>
                              <div class="form-group text-start">
                                  <label class="form-label">Foto Cover</label>
                                  <input type="file" class="form-control" name="foto_cover" value="<?= $member->foto_cover ?>">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            <?php echo form_close(); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            

            <div class="row row-card-no-pd">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <h4 class="card-title">Data Foto dan Galeri</h4>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="table-responsive table-hover table-sales">
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mapcontainer">
                          <div
                            id="world-map"
                            class="w-100"
                            style="height: 300px"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>