<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Alumni_model extends CI_Model
{
    private $_table = "tbl_diskusi";
    function detailAlumni($id = null)
    {
        $query = $this->db->get_where('tbl_alumni', array('id_alumni' => $id))->row();
        return $query;
    }



    function updateAlumni($data, $where)
    {
        $this->db->where($where);
        $this->db->update('tbl_alumni', $data);
        return true;
    }

    function updatediskusi($where, $data)
    {
        $this->db->where($where);
        $this->db->update('tbl_diskusi', $data);
        return true;
    }

    function get_data_kategori()
    {
        $query = $this->db->query("SELECT * FROM tbl_kategori ORDER by nama_kategori ASC");
        return $query->result();
    }

    function insert_diskusi($data)
    {
        if (!array_key_exists("created", $data)) {
            $data['created'] = date("Y-m-d H:i:s");
        }

        $insert = $this->db->insert($this->_table, $data);
        if ($insert) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
    // Tampilkan List berita sesuai Login User
    function getberita()
    {
        $data = $this->session->userdata('id_alumni');
        $this->db->where('tbl_diskusi.id_alumni', $data);
        return $this->db->get('tbl_diskusi', $data)->result();
    }
    // END
    function deleteBeritaAlumni($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_diskusi');
    }


    function detailberitaAlumni($id = null)
    {
        $query = $this->db->get_where('tbl_diskusi', array('id' => $id))->row();
        return $query;
    }
    function updateBeritaAlumni($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function updatejointable($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }
}