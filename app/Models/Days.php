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
class Days extends Model
{
    public $table = 'days';

    protected $primaryKey = 'id';

    protected $returnType     = 'object';

    protected $useSoftDeletes = false;

    protected $allowedFields = ['id','name','startdate','enddate'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}