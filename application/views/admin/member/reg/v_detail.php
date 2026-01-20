<?php $this->session->set_userdata('detail_member_reg', current_url()); ?>

<div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-center align-items-md-center flex-column flex-md-row pt-2 pb-4"
              style="justify-content: space-between;"
            >
              <div>
                <h3 class="fw-bold text-center"><?= $member->url_link ?></h3>
              </div>
              <div class="d-flex align-items-center">
                <?php if ($member->song != '') { ?>
                  <audio controls>
                    <source src="<?= base_url('uploads/song/' . $member->song) ?>" type="audio/mp3">
                  </audio>
                <?php }else { ?>
                  <audio controls>
                    <source src="<?= base_url('assets/song/' . $member->kode_tema . '.mp3') ?>" type="audio/mp3">
                  </audio>
                <?php  } ?>
                <div class="ml-2">
                  <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahmusik">Ubah Musik</button>

                  <div class="modal fade" id="ubahmusik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ubah Musik</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="text-center mb-4">
                            <label for="">Musik Saat Ini</label><br>
                            <?php if ($member->song != '') { ?>
                              <audio controls class="text-start">
                                <source src="<?= base_url('uploads/song/' . $member->song) ?>" type="audio/mp3">
                              </audio>
                            <?php }else { ?>
                              <audio controls>
                                <source src="<?= base_url('assets/song/' . $member->kode_tema . '.mp3') ?>" type="audio/mp3">
                              </audio>
                            <?php  } ?>
                          </div>

                          <?php echo form_open_multipart('admin123/member/edit_musik/' . $member->id_member); ?>
                          <div class="form-group text-start">
                              <label class="form-label">Musik</label>
                              <input type="file" class="form-control" name="song" value="<?= $member->song ?>">
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
                <div class="card">
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
                            <td><?= date('d M Y', strtotime($member->tgl_acara)) ?></td>
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
                          <td>Alamat Akad/Pemberkatan</td>
                          <td> : </td>
                          <td><?= $member->lokasi_akad ?></td>
                          <td>Alamat Resepsi</td>
                          <td> : </td>
                          <td><?= $member->lokasi_resepsi ?></td>
                        </tr>
                        <tr>
                            <td>Lokasi Akad/Pemberkatan</td>
                            <td> : </td>
                            <td>
                                <?php if ($member->map_akad == '') {
                                    echo '<label style="color: red;">Belum diatur</label>';
                                } else {
                                    echo '<a class="btn btn-secondary btn-sm" href="' . $member->map_akad . '" target="_blank">Lokasi</a>';
                                } ?>
                            </td>
                            <td>Lokasi Resepsi</td>
                            <td> : </td>
                            <td>
                                <?php if ($member->map_resepsi == '') {
                                    echo '<label style="color: red;">Belum diatur</label>';
                                } else {
                                    echo '<a class="btn btn-secondary btn-sm" href="' . $member->map_resepsi . '" target="_blank">Lokasi</a>';
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
                      <div class="card-title">Akun Medsos</div>
                      <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#medsos">
                            Ubah Akun Medsos
                          </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table style="width: -webkit-fill-available;">
                        <tr>
                            <td>IG Mempelai Pria</td>
                            <td> : </td>
                            <?php if ($member->ig_laki != '') { ?>
                            <td><a class="btn btn-sm btn-secondary" target="_blank" href="https://www.instagram.com/<?= $member->ig_laki ?>"><i class="fab fa-instagram"></i> <?= $member->ig_laki ?></a></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>IG Mempelai Wanita</td>
                            <td> : </td>
                            <?php if ($member->ig_prm != '') { ?>
                            <td><a class="btn btn-sm btn-secondary" target="_blank" href="https://www.instagram.com/<?= $member->ig_prm ?>"><i class="fab fa-instagram"></i> <?= $member->ig_prm ?></a></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>IG Live Streaming</td>
                            <td> : </td>
                            <?php if ($member->ig_live != '') { ?>
                            <td><a class="btn btn-sm btn-secondary" target="_blank" href="https://www.instagram.com/<?= $member->ig_live ?>"><i class="fab fa-instagram"></i> <?= $member->ig_live ?></a></td>
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
                <div class="card">
                    <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Data Ayat</div>
                      <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dataayat">
                            Ubah Ayat
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body" >
                    <p class="text-center"><?= nl2br($member->ayat) ?></p>
                    <div class="modal fade" id="dataayat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Ayat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open('admin123/member/edit_dataayat_reg/' . $member->id_member); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Ayat</label>
                                            <textarea style="height: 200px;" class="form-control" name="ayat" id=""><?= $member->ayat ?></textarea>
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
                  <div class="card-body" >
                    <table style="width: -webkit-fill-available;">
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
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Data Foto Mempelai</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mt-2">
                        <div class="text-center">
                          <p>Foto Mempelai Pria</p>
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
                          <p>Foto Mempelai Wanita</p>
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
                                      <label class="form-label">Foto Mempelai Wanita</label>
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
                      <p>Foto Cover Undangan</p>
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
                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 1</p>
                          <?php if ($member->foto_glr1 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr1) ?>" alt="Foto Laki-laki" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr1">Ubah Foto 1</button>

                          <div class="modal fade" id="ubahfotoglr1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 1</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr1 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr1) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr1/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 1</label>
                                      <input type="file" class="form-control" name="foto_glr1" value="<?= $member->foto_glr1 ?>">
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

                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 2</p>
                          <?php if ($member->foto_glr2 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr2) ?>" alt="Data Foto" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr2">Ubah Foto 2</button>

                          <div class="modal fade" id="ubahfotoglr2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 2</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr2 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr2) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr2/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 2</label>
                                      <input type="file" class="form-control" name="foto_glr2" value="<?= $member->foto_glr2 ?>">
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

                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 3</p>
                          <?php if ($member->foto_glr3 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr3) ?>" alt="Data Foto" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr3">Ubah Foto 3</button>

                          <div class="modal fade" id="ubahfotoglr3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 3</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr3 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr3) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr3/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 3</label>
                                      <input type="file" class="form-control" name="foto_glr3" value="<?= $member->foto_glr3 ?>">
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

                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 4</p>
                          <?php if ($member->foto_glr4 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr4) ?>" alt="Data Foto" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr4">Ubah Foto 4</button>

                          <div class="modal fade" id="ubahfotoglr4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 4</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr4 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr4) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr4/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 4</label>
                                      <input type="file" class="form-control" name="foto_glr4" value="<?= $member->foto_glr4 ?>">
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

                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 5</p>
                          <?php if ($member->foto_glr5 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr5) ?>" alt="Data Foto" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr5">Ubah Foto 5</button>

                          <div class="modal fade" id="ubahfotoglr5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 5</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr5 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr5) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr5/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 5</label>
                                      <input type="file" class="form-control" name="foto_glr5" value="<?= $member->foto_glr5 ?>">
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

                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 6</p>
                          <?php if ($member->foto_glr6 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr6) ?>" alt="Data Foto" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr6">Ubah Foto 6</button>

                          <div class="modal fade" id="ubahfotoglr6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 6</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr6 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr6) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr6/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 6</label>
                                      <input type="file" class="form-control" name="foto_glr6" value="<?= $member->foto_glr6 ?>">
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

                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 7</p>
                          <?php if ($member->foto_glr7 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr7) ?>" alt="Data Foto" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr7">Ubah Foto 7</button>

                          <div class="modal fade" id="ubahfotoglr7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 7</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr7 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr7) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr7/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 7</label>
                                      <input type="file" class="form-control" name="foto_glr7" value="<?= $member->foto_glr7 ?>">
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

                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 8</p>
                          <?php if ($member->foto_glr8 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr8) ?>" alt="Data Foto" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr8">Ubah Foto 8</button>

                          <div class="modal fade" id="ubahfotoglr8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 8</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr8 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr8) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr8/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 8</label>
                                      <input type="file" class="form-control" name="foto_glr8" value="<?= $member->foto_glr8 ?>">
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

                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 9</p>
                          <?php if ($member->foto_glr9 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr9) ?>" alt="Data Foto" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr9">Ubah Foto 9</button>

                          <div class="modal fade" id="ubahfotoglr9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 9</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr9 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr9) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr9/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 9</label>
                                      <input type="file" class="form-control" name="foto_glr9" value="<?= $member->foto_glr9 ?>">
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

                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 10</p>
                          <?php if ($member->foto_glr10 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr10) ?>" alt="Data Foto" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr10">Ubah Foto 10</button>

                          <div class="modal fade" id="ubahfotoglr10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 10</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr10 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr10) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr10/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 10</label>
                                      <input type="file" class="form-control" name="foto_glr10" value="<?= $member->foto_glr10 ?>">
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

                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 11</p>
                          <?php if ($member->foto_glr11 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr11) ?>" alt="Data Foto" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr11">Ubah Foto 11</button>

                          <div class="modal fade" id="ubahfotoglr11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 11</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr11 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr11) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr11/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 11</label>
                                      <input type="file" class="form-control" name="foto_glr11" value="<?= $member->foto_glr11 ?>">
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

                      <div class="col-sm-4 col-lg-3 mt-2">
                        <div class="text-center mt-2 mb-2 pb-2 border rounded border-3">
                          <p style="font-weight: bold;">Foto 12</p>
                          <?php if ($member->foto_glr12 != '') { ?>
                            <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr12) ?>" alt="Data Foto" class="img-fluid rounded"
                            style="
                            height: 400px;
                            object-fit: cover;
                            object-position: center;
                            "><br>
                          <?php  } else { ?>
                            <div style="
                              width: 80%;
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

                          <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#ubahfotoglr12">Ubah Foto 12</button>

                          <div class="modal fade" id="ubahfotoglr12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Ubah Foto 12</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="text-start mb-4">
                                    <label for="">Foto Saat Ini</label>
                                    <?php if ($member->foto_glr12 != '') { ?>
                                    <img width="80%" src="<?= base_url('uploads/foto/' . $member->foto_glr12) ?>" alt="Data Foto" class="img-fluid rounded"
                                    style="
                                    height: 400px;
                                    object-fit: cover;
                                    object-position: center;
                                    "><br>
                                    <?php  } else { ?>
                                    <div style="
                                      width: 80%;
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

                                  <?php echo form_open_multipart('admin123/member/edit_fotoglr12/' . $member->id_member); ?>
                                  <div class="form-group text-start">
                                      <label class="form-label">Foto 12</label>
                                      <input type="file" class="form-control" name="foto_glr12" value="<?= $member->foto_glr12 ?>">
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
            </div>
            
          </div>
        </div>