<?php
class Blog extends CI_Controller
{
    public function index($nama, $kelas, $nim)
    {
        $data['nama'] = $nama;
        $data['kelas'] = $kelas;
        $data['nim'] = $nim;

        $this->load->view('blog', $data);
    }

    public function listdata()
    {
        $this->load->view('list_data');
    }

    public function detail()
    {
        $this->load->view('detail_blog');
    }
}
