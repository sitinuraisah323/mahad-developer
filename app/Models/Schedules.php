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
        return $this->select('a.id,a.startdate,a.enddate, b.name as materi, c.name as hari')
                    ->from('schedule a')
                    ->join('subject b','b.id=a.id_subject','left')
                    ->join('days c','c.id=a.id_days','left')
                    ->findAll();
        }
}
