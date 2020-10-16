<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_kurs extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set("Asia/Jakarta");
    }
    private $_table = "kurs";

    public function save($data)
    {
        $this->bank = $data["bank"];
        $this->kurs_jual = $data["kurs_jual"];
        $this->kurs_beli = $data["kurs_beli"];
        $this->date_created = date('Y-m-d H:i:s');
        return $this->db->insert($this->_table, $this);
    }

    public function show_data()
    {
        $q = "SELECT * FROM kurs ";
        $query = $this->db->query($q);
        return $query->result();
    }

    public function getDetail($id_kurs)
    {
        $q = "SELECT * FROM kurs where id_kurs=$id_kurs";
        $query = $this->db->query($q);
        if ($query->num_rows() > 0) {
            $query = $query->result();
            return $query[0];
        } else
            return 0;
    }
    
    public function update($data)
    {
        $id_kurs = $data["id_kurs"];
        $this->bank = $data["bank"];
        $this->kurs_jual = $data["kurs_jual"];
        $this->kurs_beli = $data["kurs_beli"];

        $q = $this->db->where('id_kurs', $id_kurs)->update($this->_table, $this);

        return $q;
    }

    public function delete($id)
    {
        $row = $this->db->where('id_kurs', $id)->get($this->_table)->row();
        $this->db->where('id_kurs', $id)->delete($this->_table);
    }
}
