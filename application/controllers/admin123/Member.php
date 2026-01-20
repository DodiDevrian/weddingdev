<?php

class Member extends CI_Controller
{
    public function __construct(){
        parent ::__construct();

        $this->load->model('m_member');
        $this->load->model('m_tema');
    }
    
    public function reguler()
    {
        $data = array(
            'tema'                  => $this->m_tema->lists(),
            'isi'                   => 'admin/member/reg/v_lists',
            'member'                => $this->m_member->lists(),
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function vip()
    {
        $data = array(
            'tema'                  => $this->m_tema->lists(),
            'isi'                   => 'admin/member/vip/v_lists',
            'member'                => $this->m_member->lists(),
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add_reg()
    {
        $this->form_validation->set_rules('url_link', 'URL', 'required');
        $this->form_validation->set_rules('kode_tema', 'Nama Tema', 'required');
        $this->form_validation->set_rules('nama_laki', 'Nama Laki-laki', 'required');
        $this->form_validation->set_rules('nama_prm', 'Nama Perempuan', 'required');

        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'title'  => 'Member Reguler',
                'title2' => 'Tambah Data Member Reguler',
                'tema'   => $this->m_tema->lists(),
                'isi'    => 'admin/member/reg/v_add'
            );

            $this->load->view('admin/layout/v_wrapper', $data, FALSE);

        } else {

            // ambil kode tema dari form
            $kode_tema = $this->input->post('kode_tema', true);
            $id_tema = $this->input->post('id_tema', true);

            // ambil kategori dari tbl_tema
            $tema = $this->m_tema->get_by_kode($kode_tema);
            $idtema = $this->m_tema->get_by_kode($id_tema);

            $data = array(
                'url_link'  => $this->input->post('url_link', true),
                'kode_tema' => $kode_tema,
                'kategori'  => $tema->kategori,
                'id_tema'   => $idtema->id_tema,
                'role'      => 'reg',
                'nama_laki' => $this->input->post('nama_laki', true),
                'nama_prm'  => $this->input->post('nama_prm', true),
            );

            $this->m_member->add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');

            redirect('admin123/member/reguler');
        }
    }

    public function detail_reg($id_member)
    {
        $data = array(
            'title'     => 'Member Reguler',
            'title2'    => 'Detail Data Member Reguler',
            'member'    => $this->m_member->detail($id_member),
            'isi'       => 'admin/member/reg/v_detail'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit_datadiri_reg($id_member)
    {
        $data = array(
			'id_member'	=> $id_member,
			'url_link' 	=> $this->input->post('url_link'),
            'nama_laki' => $this->input->post('nama_laki'),
            'nama_prm' 	=> $this->input->post('nama_prm'),
            'init_laki' => $this->input->post('init_laki'),
            'init_prm' 	=> $this->input->post('init_prm'),
            'pgl_laki' => $this->input->post('pgl_laki'),
            'pgl_prm' 	=> $this->input->post('pgl_prm'),
            'ayah_laki' => $this->input->post('ayah_laki'),
            'ibu_laki' 	=> $this->input->post('ibu_laki'),
            'ayah_prm'  => $this->input->post('ayah_prm'),
            'ibu_prm' 	=> $this->input->post('ibu_prm')
		);

		$this->m_member->edit($data);
		$this->session->set_flashdata('pesan', 'Data Diri Berhasil Diubah!');

		redirect('admin123/member/detail_reg/' . $id_member);
    }

    public function edit_dataacara_reg($id_member)
    {
        $data = array(
			'id_member'	=> $id_member,
            'lokasi_akad' => $this->input->post('lokasi_akad'),
            'lokasi_resepsi' => $this->input->post('lokasi_resepsi'),
            'tgl_akad' 	=> $this->input->post('tgl_akad'),
            'akad_or_berkat' 	=> $this->input->post('akad_or_berkat'),
            'tgl_resepsi' 	=> $this->input->post('tgl_resepsi'),
            'tgl_acara' 	=> $this->input->post('tgl_acara'),
		);

		$this->m_member->edit($data);
		$this->session->set_flashdata('pesan', 'Data Acara Berhasil Diubah!');
		redirect('admin123/member/detail_reg/' . $id_member);
    }

    public function edit_datagift_reg($id_member)
    {
        $data = array(
			'id_member'	=> $id_member,
            'bank' => $this->input->post('bank'),
            'rekening' => $this->input->post('rekening'),
            'ewallet' => $this->input->post('ewallet'),
            'penerima' 	=> $this->input->post('penerima'),
            'no_hp' 	=> $this->input->post('no_hp'),
            'no_ewallet' 	=> $this->input->post('no_ewallet'),
            'alamat_penerima' 	=> $this->input->post('alamat_penerima'),
		);

		$this->m_member->edit($data);
		$this->session->set_flashdata('pesan', 'Data Gift Berhasil Diubah!');
		redirect('admin123/member/detail_reg/' . $id_member);
    }

    public function edit_datalovest_reg($id_member)
    {
        $data = array(
			'id_member'	=> $id_member,
            'love_st1' => $this->input->post('love_st1'),
            'love_st2' => $this->input->post('love_st2'),
            'love_st3' => $this->input->post('love_st3'),
		);

		$this->m_member->edit($data);
		$this->session->set_flashdata('pesan', 'Data Love Story Berhasil Diubah!');
		redirect('admin123/member/detail_reg/' . $id_member);
    }

    public function edit_dataayat_reg($id_member)
    {
        $data = array(
			'id_member'	=> $id_member,
            'ayat' => $this->input->post('ayat'),
		);

		$this->m_member->edit($data);
		$this->session->set_flashdata('pesan', 'Data Ayat Berhasil Diubah!');
		redirect('admin123/member/detail_reg/' . $id_member);
    }

    public function edit_datamedsos_reg($id_member)
    {
        $data = array(
			'id_member'	=> $id_member,
            'ig_laki' => $this->input->post('ig_laki'),
            'ig_prm' => $this->input->post('ig_prm'),
            'ig_live' => $this->input->post('ig_live'),
		);

		$this->m_member->edit($data);
		$this->session->set_flashdata('pesan', 'Data Media Sosial Berhasil Diubah!');
		redirect('admin123/member/detail_reg/' . $id_member);
    }

        public function edit_musik($id_member)
    {
        $config['upload_path']      = './uploads/song/';
        $config['allowed_types']    = 'mp3|wav';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('song')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/song/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->song != "") {
                unlink('./uploads/song/' . $foto->song);
            }

            $data = array(
                'id_member'      => $id_member,
                'song'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Musik Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotolaki($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 20000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_laki')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_laki != "") {
                unlink('./uploads/foto/' . $foto->foto_laki);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_laki'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto Mempelai Pria Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoprm($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 20000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_prm')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_prm != "") {
                unlink('./uploads/foto/' . $foto->foto_prm);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_prm'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto Mempelai Perempuan Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotocover($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 20000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_cover')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_cover != "") {
                unlink('./uploads/foto/' . $foto->foto_cover);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_cover'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto Mempelai Cover Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr1($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr1')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr1 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr1);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr1'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 1 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr2($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr2')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr2 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr2);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr2'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 2 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr3($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr3')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr3 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr3);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr3'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 3 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr4($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr4')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr4 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr4);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr4'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 4 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr5($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr5')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr5 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr5);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr5'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 5 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr6($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr6')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr6 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr6);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr6'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 6 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr7($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr7')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr7 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr7);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr7'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 7 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr8($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr8')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr8 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr8);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr8'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 8 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr9($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr9')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr9 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr9);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr9'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 9 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr10($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr10')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr10 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr10);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr10'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 10 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr11($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr11')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr11 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr11);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr11'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 11 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

    public function edit_fotoglr12($id_member)
    {
        $config['upload_path']      = './uploads/foto/';
        $config['allowed_types']    = 'jpg|png|jpeg|gif';
        $config['max_size']         = 200000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_glr12')) {
            echo "Data Gagal Ditambah";
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/foto/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto = $this->m_member->detail($id_member);
            if ($foto->foto_glr12 != "") {
                unlink('./uploads/foto/' . $foto->foto_glr12);
            }

            $data = array(
                'id_member'      => $id_member,
                'foto_glr12'    => $upload_data['uploads']['file_name']
            );

            $this->m_member->edit($data);
            $this->session->set_flashdata('pesan', 'Data Foto 12 Berhasil Diubah!');
            redirect('admin123/member/detail_reg/' . $id_member);
        }
    }

}