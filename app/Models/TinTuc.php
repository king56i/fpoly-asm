<?php
class TinTuc{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function typeTinTucs(){
        $this->db->query("SELECT * FROM loaitin");
        return $this->db->pdo_query();
    }
    public function typeTinTuc($idLT){
        $this->db->query("SELECT * FROM loaitin WHERE idLT = $idLT");
        return $this->db->pdo_query();
    }
    public function getTinTucs(){
        $this->db->query("SELECT * FROM tintuc");
        return $this->db->pdo_query();
    }
    public function getTinTuc($idTin){
        $this->db->query("SELECT * FROM tintuc WHERE idTin = $idTin");
        return $this->db->pdo_query_one();
    }
    public function addTinTuc($TieuDe,$TomTat,$HinhAnh,$NgayTao,$Content,$idLT,$AnHien){
        $this->db->query("INSERT INTO tintuc(TieuDe,TomTat,HinhAnh,NgayTao,Content,idLT,AnHien) VALUES('$TieuDe','$TomTat','$HinhAnh','$NgayTao','$Content','$idLT','$AnHien')");
        $this->db->execute();
    }
}
?>