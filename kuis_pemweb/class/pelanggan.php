<?php

class Pelanggan
{
    public $db;

    public function __construct(){
        require 'koneksi.php';
        $this->db = $conn;
    }

    public function tampilkan()
    {
        $sql = "SELECT * FROM pelanggan";
        $query = $this->db->query($sql);
        $query->execute();
        return $query;
    }

    public function tambah($id, $nama, $alamat, $email){
        $query = $this->db->prepare("INSERT INTO pelanggan (id, nama, alamat, email) VALUES (:id, :nama, :alamat, :email)");
        $query->bindParam(':id', $id);
        $query->bindParam(':nama', $nama);
        $query->bindParam(':alamat', $alamat);
        $query->bindParam(':email', $email);
        $query->execute();
    }

    public function edit($id, $nama, $alamat, $email){
        $query = $this->db->prepare("UPDATE pelanggan SET id = :id, nama = :nama, alamat = :alamat, email = :email WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->bindParam(':nama', $nama);
        $query->bindParam(':alamat', $alamat);
        $query->bindParam(':email', $email);
        $query->execute();
    }

    public function hapus($id){
        $query = $this->db->prepare("DELETE FROM pelanggan WHERE id = :id");
        $query->bindParam('id', $id);
        $query->execute();
    }

    public function tampilkan_id($id){
        $query = $this->db->prepare("SELECT * FROM pelanggan WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if($query){
            return $query->fetch();
        }
    }
}

?>