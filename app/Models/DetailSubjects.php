<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailSubjects extends Model
{

    public $table = 'detail_subject';

    protected $primaryKey = 'id';

    protected $returnType     = 'object';

    protected $useSoftDeletes = false;

    protected $allowedFields        = ['id', 'id_subject', 'id_pemateri', 'description1', 'description2'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    function getDetail()
    {
        return $this->select('id, id_subject, id_pemateri')->findAll();
    }
    function getDetailSubject($id_subject)
    {
        // return $this->select('*')->where('id_subject', $id_subject)->findAll();
        return $this->select('detail_subject.*, s.name as materi, s.description, v.name as pemateri')
        ->join('subject s', 's.id = detail_subject.id_subject')
        ->join('visitors v', 'v.id = detail_subject.id_pemateri')
        ->where('detail_subject.id_subject', $id_subject)
        ->findAll();
    }
}
