<?php
namespace App\Models;


use CodeIgniter\Model;

/**
 * Class Users
 * @package App\Models
 * @author Bagus Aditia Setiawan
 * @contact 081214069289
 * @copyright saeapplication.com
 */
class Subjects extends Model
{
    public $table = 'subject';

    protected $primaryKey = 'id';

    protected $returnType     = 'object';

    protected $useSoftDeletes = false;

    protected $allowedFields = ['id','name','description','status'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    function getSubject(){
        return $this->select('id, name')->findAll();
    }
}