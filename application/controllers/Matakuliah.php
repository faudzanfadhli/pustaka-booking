<?php
class Matakuliah extends CI_Controller {
  public function index() {
    $this->load->view('view_form_matakuliah');
  }

  public function cetak() {
    $this->form_validation->set_rules('kode', 'Kode Matakuliah',
      'required|max_length[3]|numeric', [
        'required' => 'Kode Mata kuliah harus diisi!',
        'max_length' => 'Kode tidak sesuai!',
        'numeric' => 'Kode harus berupa angka!'
      ]
    );

    $this->form_validation->set_rules('nama', 'Nama Matakuliah',
      'required|min_length[3]', [
        'required' => 'Nama Mata kuliah harus diisi!',
        'min_lenght' => 'Nama terlalu pendek'
      ]
    );

    $this->form_validation->set_rules('SKS', 'SKS',
      'numeric', [
        'numeric' => 'Jumlah SKS harus dipilih!'
      ]
    );

    if ($this->form_validation->run() != true) {
      $this->load->view('view_form_matakuliah');
    }

    else {
      $data = [
        'kode' => $this->input->post('kode'),
        'nama' => $this->input->post('nama'),
        'sks' => $this->input->post('sks')
      ];

      $this->load->view('view_data_matakuliah', $data);
    }
  }
}