<?php

class Tema extends CI_Controller
{
    public function __construct(){
        parent ::__construct();

        $this->load->model('m_tema');
    }
    
    public function index()
    {
        $data = array(
            'tema'                  => $this->m_tema->lists(),
            'isi'                   => 'admin/tema/v_lists',
            'tema'   => $this->m_tema->lists(),
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_tema', 'Nama Tema', 'required');
        $this->form_validation->set_rules('kode_tema', 'Kode Tema', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('harga_reg_coret', 'Harga Reguler Coret', 'required');
        $this->form_validation->set_rules('harga_reg', 'Harga Reguler', 'required');
        $this->form_validation->set_rules('harga_vip_coret', 'Harga VIP Coret', 'required');
        $this->form_validation->set_rules('harga_vip', 'Harga VIP', 'required');
        $this->form_validation->set_rules('harga_vvip_coret', 'Harga VVIP Coret', 'required');
        $this->form_validation->set_rules('harga_vvip', 'Harga VVIP', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './uploads/tema/';
            $config['allowed_types']    = 'jpg|png|jpeg|gif';
            $config['max_size']         = 20000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('thumbnail')) {

                $data = array(
                    'title'     => 'Dosen',
                    'title2'    => 'Tambah Data Dosen',
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'admin/tema/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/tema/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_tema'     => $this->input->post('nama_tema'),
                    'kode_tema'     => $this->input->post('kode_tema'),
                    'kategori'      => $this->input->post('kategori'),
                    'harga_reg_coret'   => $this->input->post('harga_reg_coret'),
                    'harga_reg'         => $this->input->post('harga_reg'),
                    'harga_vip_coret'   => $this->input->post('harga_vip_coret'),
                    'harga_vip'         => $this->input->post('harga_vip'),
                    'harga_vvip_coret'  => $this->input->post('harga_vvip_coret'),
                    'harga_vvip'        => $this->input->post('harga_vvip'),
                    'thumbnail'         => $upload_data['uploads']['file_name']
                );

                $this->m_tema->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
                redirect('admin123/tema');
                return;
            }
        }
        $data = array(
            'title'     => 'Tema',
            'title2'    => 'Tambah Data Tema',
            'isi'       => 'admin/tema/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_tema)
    {
        $this->form_validation->set_rules('nama_tema', 'Nama Tema', 'required');
        $this->form_validation->set_rules('kode_tema', 'Kode Tema', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('harga_reg_coret', 'Harga Reguler Coret', 'required');
        $this->form_validation->set_rules('harga_reg', 'Harga Reguler', 'required');
        $this->form_validation->set_rules('harga_vip_coret', 'Harga VIP Coret', 'required');
        $this->form_validation->set_rules('harga_vip', 'Harga VIP', 'required');
        $this->form_validation->set_rules('harga_vvip_coret', 'Harga VVIP Coret', 'required');
        $this->form_validation->set_rules('harga_vvip', 'Harga VVIP', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './uploads/tema/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('thumbnail')) {

                $data = array(
                    'title'     => 'Kursus',
                    'title2'    => 'Ubah Data Kursus',
                    'error'     => $this->upload->display_errors(),
                    'tema'     => $this->m_tema->detail_tema($id_tema),
                    'isi'       => 'admin/tema/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/tema/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Hapus file foto yang lama
                $tema = $this->m_tema->detail_tema($id_tema);
                if ($tema->thumbnail != "") {
                    unlink('./uploads/tema/' . $tema->thumbnail);
                }

                $data = array(
                    'id_tema'       => $id_tema,
                    'nama_tema'     => $this->input->post('nama_tema'),
                    'kode_tema'     => $this->input->post('kode_tema'),
                    'kategori'      => $this->input->post('kategori'),
                    'harga_reg_coret'  => $this->input->post('harga_reg_coret'),
                    'harga_reg'        => $this->input->post('harga_reg'),
                    'harga_vip_coret'  => $this->input->post('harga_vip_coret'),
                    'harga_vip'        => $this->input->post('harga_vip'),
                    'harga_vvip_coret'  => $this->input->post('harga_vvip_coret'),
                    'harga_vvip'        => $this->input->post('harga_vvip'),
                    'thumbnail'    => $upload_data['uploads']['file_name']
                );

                $this->m_tema->edit($data);
                $this->session->set_flashdata('pesan', 'Data tema Berhasil Diubah!');
                redirect('admin123/tema');
            }
            // $upload_data = array('uploads' => $this->upload->data());
            // $config['image_library'] = 'gd2';
            // $config['source_image'] = './upload/cover_kursus/' . $upload_data['uploads']['file_name'];
            // $this->load->library('image_lib', $config);

            $data = array(
                'id_tema'       => $id_tema,
                    'nama_tema'     => $this->input->post('nama_tema'),
                    'kode_tema'     => $this->input->post('kode_tema'),
                    'kategori'      => $this->input->post('kategori'),
                    'harga_reg_coret'  => $this->input->post('harga_reg_coret'),
                    'harga_reg'        => $this->input->post('harga_reg'),
                    'harga_vip_coret'  => $this->input->post('harga_vip_coret'),
                    'harga_vip'        => $this->input->post('harga_vip'),
                    'harga_vvip_coret'  => $this->input->post('harga_vvip_coret'),
                    'harga_vvip'        => $this->input->post('harga_vvip'),
            );

            $this->m_tema->edit($data);
            $this->session->set_flashdata('pesan', 'Data Tema Berhasil Diubah!');
            redirect('admin123/tema');
        }
        $data = array(
            'title'     => 'kursus',
            'title2'    => 'Ubah Data kursus',
            'tema'     => $this->m_tema->detail_tema($id_tema),
            'isi'       => 'admin/tema/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}