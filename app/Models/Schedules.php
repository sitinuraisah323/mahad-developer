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
        return $this->select('schedule.id,schedule.startdate,schedule.enddate, b.name as materi, c.name as hari')
                    ->join('subject b','b.id=schedule.id_subject','left')
                    ->join('days c','c.id=schedule.id_days','left')
                    ->findAll();
        }
}
