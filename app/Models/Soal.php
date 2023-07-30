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

    // function getSchedul(){
    //     return $this->select('schedule.id, subject.name as materi, days.name as hari')
    //                 ->from('schedule')
    //                 ->join('subject','subject.id=schedule.id_subject')
    //                 ->join('days','days.id=schedule.id_days')
    //                 ->findAll();
    //     }
}
