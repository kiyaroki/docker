<?php

class Auto_model extends CI_Model
{

    // +----------------------------------------------------------
    // | BMW 
    // +----------------------------------------------------------
    // | 2 ITF - 2018-2019
    // +----------------------------------------------------------
    // | Auto model
    // +----------------------------------------------------------
    // | M. Decabooter, J. Janssen
    // +----------------------------------------------------------

    function __construct()
    {
        parent::__construct();
    }

    function getAllBySerie()
    {
        $this->db->order_by('serie', 'asc');
        $query = $this->db->get('bmw_auto');    // genereert SELECT * FROM bmw_auto ORDER BY serie asc
        return $query->result();                // een array met auto-objecten
    }

    function getAllByAuto()
    {
        $this->db->order_by('auto', 'asc');
        $query = $this->db->get('bmw_auto');    // genereert SELECT * FROM bmw_auto ORDER BY auto asc
        return $query->result();                // een array met auto-objecten
    }

    function get($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('bmw_auto');    // genereert SELECT * FROM bmw_auto WHERE id = $id
        return $query->row();                   // 1 auto-object
    }
}
