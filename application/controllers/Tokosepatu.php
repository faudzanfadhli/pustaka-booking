<?php
class Tokosepatu extends CI_Controller {
  public function index() {
    $this->load->view('view_form_tokosepatu');
  }

  public function cetak() {
    $this->form_validation->set_rules('nmpembeli', 'Nama Pembeli',
      'required|max_length[100]', [
        'required' => 'Nama harus diisi!', 
        'max_length' => 'Nama terlalu panjang!'
      ]
    );

    $this->form_validation->set_rules('nohp', 'Nomor Handphone',
      'required|max_length[13]', [
        'required' => 'Nomor handphone harus diisi!',
        'max_length' => 'Nomor yang Anda masukkan melebihi batas!',
        'min_lenght' => 'Nomor yang Anda masukkan kurang lengkap!'
      ]
    );

    if ($this->form_validation->run() != true) {
      $this->load->view('view_form_tokosepatu');
    }

    else {
      $data = [
        'nmpembeli' => $this->input->post('nmpembeli'),
        'nohp' => $this->input->post('nohp'),
        'merk' => $this->input->post('merk'),
        'uk' => $this->input->post('uk'),
        'hrg' => $this->input->post('hrg'),
      ];
      $this->load->view('view_data_tokosepatu', $data);
    }
  }
}