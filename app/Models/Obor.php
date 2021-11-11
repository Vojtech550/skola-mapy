<?php

namespace App\Models;

use CodeIgniter\Model;

class Obor extends Model
{
    protected function initialize()
    {
        //$this->allowedFields[] = 'middlename';
    }
    
    protected $table      = 'obor';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nazev_obor'];

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

    public function select_menu(){
        //$query = $this->db->get('location');
            $select = $this->db->query('SELECT obor.id, obor.nazev_obor FROM obor');
            //echo 'Total Results: ' . $query->num_rows();
        //     $results = $this->db->query('
        // SELECT mesto.id AS mesto_id, mesto.nazev AS mesto, obor.nazev AS obor, pocet_prijatych.pocet AS prijatych, pocet_prijatych.rok AS rok_prijeti, skola.nazev AS skola, skola.geo_lat AS geo_lattitude, skola.geo_long AS geo_longtitude 
        // FROM mesto
        // INNER JOIN skola ON mesto.id=skola.mesto INNER JOIN pocet_prijatych ON skola.id=pocet_prijatych.skola 
        // INNER JOIN obor ON pocet_prijatych.obor=obor.id');
        return $select->getResult();
    }
}