<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_usd_jual extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set("Asia/Jakarta");
    }
    private $_table = "usd_jual";

    public function save($data)
    {
        $this->mata_uang = $data["mata_uang"];
        $this->jual_week = $data["jual_week"];
        $this->jual_month = $data["jual_month"];
        $this->jual_threemonth = $data["jual_threemonth"];
        $this->jual_sixmonth = $data["jual_sixmonth"];
        $this->date_label = $data["date_label"];
        $this->date_created = date('Y-m-d H:i:s');
        return $this->db->insert($this->_table, $this);
    }

    public function show_data()
    {
        $q = "SELECT * FROM usd_jual ";
        $query = $this->db->query($q);
        return $query->result();
    }

    public function getDetail($id_usd)
    {
        $q = "SELECT * FROM usd_jual where id_usd=$id_usd";
        $query = $this->db->query($q);
        if ($query->num_rows() > 0) {
            $query = $query->result();
            return $query[0];
        } else
            return 0;
    }
    
    public function update($data)
    {
        $id_usd = $data["id_usd"];
       
        $this->mata_uang = $data["mata_uang"];
        $this->jual_week = $data["jual_week"];
        $this->jual_month = $data["jual_month"];
        $this->jual_threemonth = $data["jual_threemonth"];
        $this->jual_sixmonth = $data["jual_sixmonth"];
        $this->date_label = $data["date_label"];

        $q = $this->db->where('id_usd', $id_usd)->update($this->_table, $this);

        return $q;
    }

    public function delete($id)
    {
        $row = $this->db->where('id_usd', $id)->get($this->_table)->row();
        $this->db->where('id_usd', $id)->delete($this->_table);
    }
}
