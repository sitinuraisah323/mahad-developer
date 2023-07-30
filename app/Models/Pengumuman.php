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
class Pengumuman extends Model
{
    public $table = 'pengumuman';

    protected $primaryKey = 'id';

    protected $returnType     = 'object';

    protected $useSoftDeletes = false;

    protected $allowedFields = ['id','subject','detail'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}