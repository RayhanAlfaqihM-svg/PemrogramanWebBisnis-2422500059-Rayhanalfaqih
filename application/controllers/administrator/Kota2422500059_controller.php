<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kota2422500059_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('Kota2422500059_model');
    }
    
    public function index() {
        $data['list_kota'] = $this->Kota2422500059_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/kota/index', $data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_kota() {
        $data['title'] = 'Tambah Kota';

        $this->form_validation->set_rules('nama_kota059', 'Nama_Kota059', 'required');
        if ($this->form_validation->run() !== FALSE) {
            $this->__simpan_kota();
        }else{
            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar');
            $this->load->view('administrator/kota/tambah_kota');
            $this->load->view('administrator/templates/footer');
            
        }
    }

    private function __simpan_kota()
    {
        $data = [
            'nama_kota059' => ucwords($this->input->post('nama_kota059')),
            'jenis_kota059' => ucfirst($this->input->post('jenis_kota059')),
            'provinsi059' => ucfirst($this->input->post('provinsi059')),
            'status059' => ucfirst($this->input->post('status059'))
            
        ];
        $simpan = $this->Kota2422500059_model->tambah($data);
        if ($simpan) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Berhasil menambahkan kota!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    Gagal menambahkan kategori!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        }
        redirect('admin/kategori');
    }

    public function hapus_kota($id)
    {
        // check apakah ada kategori
        $kategori = $this->Kota2422500059_model->get_by_id($id);
        if ($kategori) {
            $hapus = $this->Kota2422500059_model->hapus($id);
            if ($hapus) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show"
                    role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                        aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        Berhasil menghapus kategori!!
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
                ');
            } else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                    role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                        aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>
                        Gagal menghapus kategori!!
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
                ');
            }
            redirect('admin/kota');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                    aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    Kategori tidak ditemukan!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            ');
            redirect('admin/kota');
        }
    }
    public function ubah_kota($id)
    {
        // check dulu apakah id dengan kategori ada?
        $Kota2422500059 = $this->Kota2422500059_model->get_by_id($id);
        if ($Kota2422500059) {
            $this->form_validation->set_rules('nama_kota059', 'Nama Kota059', 'required');
            if ($this->form_validation->run() !== FALSE) {
                $this->__ubah_kota($id);
            } else {
                $data['title'] = 'Ubah Kota';
                $data['kota'] = $Kota2422500059;
                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/kota/ubah_kota', $data);
                $this->load->view('administrator/templates/footer');
            }
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    Kota tidak ditemukan!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/kota');
        }
    }

    private function __ubah_kota($id)
    {
        $data = [
            'nama_kota059' => ucwords($this->input->post('nama_kota059')),
            'jenis_kota059' => ucfirst($this->input->post('jenis_kota059')),
            'provinsi059' => ucfirst($this->input->post('provinsi059')),
            'status059' => ucfirst($this->input->post('status059'))
        ];
        $ubah = $this->Kota2422500059_model->ubah($data, $id);
        if ($ubah) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Berhasil mengganti kota
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    Gagal mengganti kota
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        }
        redirect('admin/kota');
    }
}