<?php

namespace App\Models;

use CodeIgniter\Model;

class Main_Model extends Model
{
    protected function initialize()
    {
        //$this->allowedFields[] = 'middlename';
    }
    
    protected $table      = 'mesto';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nazev_mesto'];

    protected $useTimestamps = false;
    protected $dateFormat = 'datetime'; //not needed
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;
    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
    
    public function load_data()
    {
        $result = $this->db->query('
        SELECT skola.id AS skola_id, mesto.nazev_mesto AS nazev_mesto, obor.nazev_obor AS nazev_obor, pocet_prijatych.pocet AS prijatych, pocet_prijatych.rok AS rok_prijeti, skola.nazev_skola AS nazev_skola, skola.geo_lat AS geo_lattitude, skola.geo_long AS geo_longtitude 
        FROM mesto
        INNER JOIN skola ON mesto.id=skola.mesto INNER JOIN pocet_prijatych ON skola.id=pocet_prijatych.skola 
        INNER JOIN obor ON pocet_prijatych.obor=obor.id');
        return $result->getResult();
    }
    public function school_save(){
        $this->db->select('mesto.id AS mesto_id, mesto.nazev AS mesto, obor.nazev AS obor, pocet_prijatych.pocet AS prijatych, pocet_prijatych.rok AS rok_prijeti, skola.nazev AS skola, skola.geo_lat AS geo_lattitude, skola.geo_long AS geo_longtitude');
        $this->db->from('mesto');
        $this->db->join('skola', 'mesto.id=skola.mesto');
        $this->db->join('pocet_prijatych', 'skola.id=pocet_prijatych.skola');
        $this->db->join('obor', 'pocet_prijatych.obor=obor.id');
/**        $data = array(
            'mesto_id' => $this->input->post('mesto_id'),
            'mesto' => $this->input->post('mesto'),
            'obor' => $this->input->post('obor'),
            'prijatych' => $this->input->post('prijatych'),
            'rok_prijeti' => $this->input->post('rok_prijeti'),
            'skola' => $this->input->post('skola'),
            'geo_latitude' => $this->input->post('geo_latitude'),
            'geo_longtitude' => $this->input->post('geo_longtitude'),
        );
       if($this->db->insert('mapy',$data)){
            return true;
        }
        else
        {
            return false;
        } */
            
    } 
}