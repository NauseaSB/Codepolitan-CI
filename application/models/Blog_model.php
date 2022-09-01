<?php
class Blog_model extends CI_Model
{
    public function getBlogs($limit, $offset) // fungsi dalam model yang akan menganbil seluruh isi database yang ada dalam tabel yang dituju
    {
        $filter = $this->input->get('find'); // membuat variable sehingga dapat mengambil data dari form yang ada dalam index
        $this->db->like('title', $filter); // akan mencari title berdasarkan hasil input form pada index
        $query = $this->db->get('blog'); // mengambil seluruh data yang ada dalam database yang dipilih
        $this->db->limit($limit, $offset);
        $this->db->order_by('date', 'desc');

        return $query->result_array();
    }

    public function getTotalBlogs() // fungsi dalam model yang akan menganbil seluruh isi database yang ada dalam tabel yang dituju
    {
        $filter = $this->input->get('find'); // membuat variable sehingga dapat mengambil data dari form yang ada dalam index
        $this->db->like('title', $filter); // akan mencari title berdasarkan hasil input form pada index
        return $this->db->count_all_results('blog'); //akan mengembalikan jumlah data yang diquery
    }

    public function getArticle($field, $value)
    {
        $this->db->where($field, $value); //parameternya adalah kolom yang dipilih  kemudian variabel untuk menyimpannya
        return $this->db->get('blog');
    }

    public function insertBlog($data) //merupakan method yang akan menyimpan data ke dalam database
    {
        $this->db->insert('blog', $data);
        return $this->db->insert_id();
    }

    public function updateBlog($id, $post) // merupakan method yang akan melakukan update data ke dalam database
    {
        $this->db->where('id', $id);
        $this->db->update('blog', $post);

        return $this->db->affected_rows();
    }

    public function deleteArticle($id)
    {
        $this->db->where('id', $id); //mencari berdasarkan id
        $this->db->delete('blog'); //kenapa tidak menggunakan id, karena diatas sudah dipilih untuk id mana yang akan di hapus, sehingga pada method ini hanya akan memilih di tabel mana yang akan dihapus
        return $this->db->affected_rows();
    }
}
