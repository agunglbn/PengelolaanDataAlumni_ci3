<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Front_model extends CI_Model
{
    public function beritaAlumni()
    {
        $this->db->select('*');
        $this->db->from('tbl_diskusi');
        $this->db->where('status', '1');
        $this->db->order_by('created', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return  $data = $query->result();
        }
    }
    public function beritaAlumniSide()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->where('status', '1');
        $this->db->order_by('created', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $data = $query->result();
        }
    }
    public function getAllBeritaAlumni($limit, $start)
    {

        $this->db->select('*');
        $this->db->from('tbl_diskusi');
        $this->db->where('status', '1');
        $this->db->order_by('created', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return  $data = $query->result();
        }
    }
    public function countAllBeritaAlumni()
    {

        $this->db->select('*');
        $this->db->from('tbl_diskusi');
        $this->db->where('status', '1');
        $this->db->order_by('created', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function DetailBeritaAlumni($id)
    {
        return  $this->db->get_where('tbl_diskusi', array('id' => $id))->row_array();
    }


    //Berita Sekolah Dihalaman Depan
    public function beritasekolah()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->where('status', '1');
        $this->db->order_by('created', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $data = $query->result();
        }
    }

    public function beritasekolahSide()
    {
        $this->db->select('*');
        $this->db->from('tbl_diskusi');
        $this->db->where('status', '1');
        $this->db->order_by('created', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $data = $query->result();
        }
    }
    public function getAllBeritaSekolah($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->where('status', '1');
        $this->db->order_by('created', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $data = $query->result();
        }
    }
    public function countAllBeritaSekolah()
    {

        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->where('status', '1');
        $this->db->order_by('created', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    function DetailBeritaSekolah($id)
    {
        return  $this->db->get_where('tbl_berita', array('id' => $id))->row_array();
    }
}