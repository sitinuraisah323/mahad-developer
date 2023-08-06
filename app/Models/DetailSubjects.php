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
}
