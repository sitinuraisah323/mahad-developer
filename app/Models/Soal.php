<?php

namespace App\Models;

use CodeIgniter\Model;

class Soal extends Model
{
	
	public $table = 'soal';

    protected $primaryKey = 'id';

    protected $returnType     = 'object';

    protected $useSoftDeletes = false;

    protected $allowedFields        = ['id','id_materi','description'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    function getSoal($id_subject)
    {
        return $this->select('*')->where('id_materi', $id_subject)->findAll();
        // return $this->select('detail_subject.*, s.name as materi, s.description, v.name as pemateri')
        // ->join('subject s', 's.id = detail_subject.id_subject')
        // ->join('visitors v', 'v.id = detail_subject.id_pemateri')
        // ->where('detail_subject.id_subject', $id_subject)
        // ->findAll();
    }
}
