<?php
namespace App\Models;

use CodeIgniter\Model;

class Summernote extends Model
{
    public $table = 'detail_materi';

    protected $primaryKey = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType     = 'array';
	protected $protectFields        = true;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['subject','content', 'sub_subject'];

  	// Dates
	// protected $useTimestamps        = true;
	// protected $dateFormat           = 'datetime';
	// protected $createdField         = 'created_at';
	// protected $updatedField         = 'updated_at';
	// protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];



    public function getData($id = false){
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
