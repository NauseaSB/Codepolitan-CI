<?php
class Blogs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct(); //harus dipanggil ketika membuat class yang extend dari class induk (parent)
        $this->load->model('Blog_model'); // menginclude model yang dituju
        $this->load->library('session');
    }

    public function index($offset = 0)
    {
        $this->load->library('pagination');

        $config['base_url'] = site_url('blogs/index');
        $config['total_rows'] = $this->Blog_model->getTotalBlogs();
        $config['per_page'] = 3;

        $this->pagination->initialize($config);

        $query = $this->Blog_model->getBlogs($config['per_page'], $offset); // mengambil fungsi yang ada dalam model Blog_model
        $data['blogs'] = $query;

        //ketiga load view ini akan menyatukan antara header, footer serta content dari website. sehingga pada bagian header dan footer tidak perlu diubah ubah tiap halamannya
        $this->load->view('header');
        $this->load->view('blogs', $data);
        $this->load->view('footer');
    }

    public function detail($url)
    {
        $query = $this->Blog_model->getArticle('url', $url); // mengambil fungsi yang ada dalam model Blog_model
        $data['blogs'] = $query->row_array();
        $this->load->view('header');
        $this->load->view('detail', $data);
        $this->load->view('footer');
    }

    public function formAdd()
    {
        // Validasi rule untuk form add
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required|alpha_dash');
        $this->form_validation->set_rules('content', 'Konten', 'required');

        if ($this->form_validation->run() === TRUE) { //supaya tidak terjadi error ketika halaman di refresh. dikarenakanan title dan content tidak boleh null.
            // menggunakan method post sehingga hanya dapat melakukan input sekali untuk isian tersebut dan ketika dilakukan refresh, data tidak terus-terusan tersubmit.
            $data['title'] = $this->input->post('title');
            $data['url'] = $this->input->post('url');
            $data['content'] = $this->input->post('content');

            // konfigurasi untuk upload gambar cover
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 5000;
            $config['max_height']           = 4000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('cover')) {
                echo $this->upload->display_errors();
            } else {
                $data['cover'] = $this->upload->data('file_name');
            }

            $id = $this->Blog_model->insertBlog($data); //proses input data dipindahkan ke dalam model dan disini hanya memanggil method tersebut dan diisikan dengan parameter data yang akan disimpan

            //query builder diatas akan disimpan ke dalam variable $id sehingga dapat mewnampilkan error (pada model terdapat return insert_id dimana akan menghasilkan id yang baru saja di insert (hal ini dapat digunakan sebagai tanda bahwa data sudah dimasukan ke dalam database atau belum)) sehingga pada pengkondisian if else dibawah dapat menghasilkan ketika hasil return $id = null maka akan menghasilkan data gagal disimpan dan sebaliknya
            if ($id) {
                # code...
                $this->session->set_flashdata("message", '<div class="alert alert-success">Data Berhasil Disimpan</div>');
                redirect('/');
            } else {
                # code...
                $this->session->set_flashdata("message", '<div class="alert alert-warning">Data Berhasil Disimpan</div>');
                redirect('/');
            }
        }
        $this->load->view('header');
        $this->load->view('formAdd');
        $this->load->view('footer');
    }

    public function formEdit($id)
    {
        $query = $this->Blog_model->getArticle('id', $id);
        $data['blog'] = $query->row_array();

        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required|alpha_dash');
        $this->form_validation->set_rules('content', 'Konten', 'required');

        if ($this->form_validation->run() === TRUE) {
            $post['title'] = $this->input->post('title');
            $post['url'] = $this->input->post('url');
            $post['content'] = $this->input->post('content');

            // konfigurasi untuk upload gambar cover
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 2000;
            $config['max_height']           = 1000;

            $this->load->library('upload', $config);
            $this->upload->do_upload('cover');

            if (!empty($this->upload->data('file_name'))) {
                $post['cover'] = $this->upload->data('file_name');
            }

            $id = $this->Blog_model->updateBlog($id, $post);

            if ($id) {
                # code...
                $this->session->set_flashdata("message", '<div class="alert alert-success">Data Berhasil Disimpan</div>');
                redirect('/');
            } else {
                # code...
                $this->session->set_flashdata("message", '<div class="alert alert-warning">Data Berhasil Disimpan</div>');
                redirect('/');
            }
        }
        $this->load->view('header');
        $this->load->view('formEdit', $data);
        $this->load->view('footer');
    }

    public function delete($id)
    {
        $result = $this->Blog_model->deleteArticle($id);
        if ($result) {
            # code...
            $this->session->set_flashdata("message", '<div class="alert alert-success">Data Berhasil Dihapus</div>');
        } else {
            $this->session->set_flashdata("message", '<div class="alert alert-warning">Data Gagal Dihapus</div>');
        }
        redirect('/');
    }

    public function login()
    {
        if ($this->input->post()) {
            # code...
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($username == 'admin' && $password == 'admin') {
                # code...
                $_SESSION['username'] = 'admin';
                redirect('/');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning">Username / Password Salah!</div>');
                redirect('blogs/login');
            }
        }

        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
