<?php
class Blogs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct(); //harus dipanggil ketika membuat class yang extend dari class induk (parent)
        $this->load->database(); //jika ingin menggunakan database dalam class ini
        $this->load->helper('url'); //menginclude file helper url
        $this->load->model('Blog_model'); // menginclude model yang dituju
    }

    public function index()
    {
        $query = $this->Blog_model->getBlogs(); // mengambil fungsi yang ada dalam model Blog_model
        $data['blogs'] = $query->result_array();
        $this->load->view('blogs', $data);
    }

    public function detail($url)
    {
        $query = $this->Blog_model->getArticle('url', $url); // mengambil fungsi yang ada dalam model Blog_model
        $data['blogs'] = $query->row_array();
        $this->load->view('detail', $data);
    }

    public function formAdd()
    {
        if ($this->input->post()) { //supaya tidak terjadi error ketika halaman di refresh. dikarenakanan title dan content tidak boleh null.
            // menggunakan method post sehingga hanya dapat melakukan input sekali untuk isian tersebut dan ketika dilakukan refresh, data tidak terus-terusan tersubmit.
            $data['title'] = $this->input->post('title');
            $data['url'] = $this->input->post('url');
            $data['content'] = $this->input->post('content');

            $id = $this->Blog_model->insertBlog($data); //proses input data dipindahkan ke dalam model dan disini hanya memanggil method tersebut dan diisikan dengan parameter data yang akan disimpan

            //query builder diatas akan disimpan ke dalam variable $id sehingga dapat mewnampilkan error (pada model terdapat return insert_id dimana akan menghasilkan id yang baru saja di insert (hal ini dapat digunakan sebagai tanda bahwa data sudah dimasukan ke dalam database atau belum)) sehingga pada pengkondisian if else dibawah dapat menghasilkan ketika hasil return $id = null maka akan menghasilkan data gagal disimpan dan sebaliknya
            if ($id) {
                # code...
                echo 'Data berhasil Disimpan';
            } else {
                # code...
                echo 'Data gagal Disimpan';
            }
        }

        $this->load->view('formAdd');
    }

    public function formEdit($id)
    {
        $query = $this->Blog_model->getArticle('id', $id);
        $data['blog'] = $query->row_array();
        if ($this->input->post()) {
            $post['title'] = $this->input->post('title');
            $post['url'] = $this->input->post('url');
            $post['content'] = $this->input->post('content');

            $id = $this->Blog_model->updateBlog($id, $post);

            if ($id) {
                # code...
                echo 'Data berhasil Diupdate';
            } else {
                # code...
                echo 'Data gagal Diupdate';
            }
        }
        $this->load->view('formEdit', $data);
    }

    public function delete($id)
    {
        $this->Blog_model->deleteArticle($id);
        redirect('/');
    }
}
