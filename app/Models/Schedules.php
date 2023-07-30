<?php

namespace App\Models;

use CodeIgniter\Model;

class Schedules extends Model
{
	
	public $table = 'schedule';

    protected $primaryKey = 'id';

    protected $returnType     = 'object';

    protected $useSoftDeletes = false;

    protected $allowedFields        = ['id','id_days','id_subject','startdate','enddate', 'status'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    function getSchedul(){
        return $this->select('schedule.id, subject.name as materi, days.name as hari')
                    ->from('schedule')
                    ->join('subject','subject.id=schedule.id_subject')
                    ->join('days','days.id=schedule.id_days')
                    ->findAll();
        }
}
