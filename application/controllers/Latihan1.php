<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        // echo "<h1>Biodata Mahasiswa</h1>";
        // echo "<b>NIM:</b> 12201340<br><b>Nama:</b> Fauzan Fadli<br><b>Kelas:</b> 12.3B.03<br><b>Kampus:</b> Cimone<br><b>Hobi:</b> Menonton Film";
        echo "Selamat Datang. selamat belajar Web Programming 2";
    }

    public function penjumlahan($nil1, $nil2)
    {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->penjumlahan($nil1, $nil2);
        echo "Hasil penjumlahan dari " . $nil1 . " + " . $nil2 . " = " . $hasil;
    }

    public function view_penjumlahan($nil1, $nil2)
    {
        $this->load->model('Model_latihan1');
        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->Model_latihan1->penjumlahan($nil1, $nil2);

        $this->load->view('view_latihan1', $data);
    }
}
