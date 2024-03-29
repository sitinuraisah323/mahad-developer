<?php namespace App\Controllers\Api;
use App\Controllers\Api\BaseApiController;

/**
 * Class Users
 * @package App\Controllers\Api
 * @author Enur Nurjaman
 * @contact 087xxx
 * @copyright sindigilive.com
 */


class Visitors extends BaseApiController
{
    public $modelName = '\App\Models\Visitors';

       /**
     * @var array
     * column of name table database
     * name of param post
     */
//    [
//        'column'    => 'value'
//    ]

    public $fillSearch = [
        // 'fullname'  => 'fullname'
    ];

    /**
     * @var array
     * column of name table database
     * name of param post
     */
//    [
//        'column'    => 'value'
//    ]
    public $fillWhere = [
        'id' => 'id',
    ];

    

    /**
     * @var array
     * column of name table database
     * name of param post
     */
//    [
//        'column'    => 'value'
//    ]

    /**
     * @var array
     * column of name table database
     * name of param post
     */
//    [
//        'column'    => 'value'
//    ]

//    product
    public $content = 'Master Users';
    //--------------------------------------------------------------------

    public function student()
    {
        // echo 'Yes'; exit;
        if(is_null(session()->get('logged_in'))){            
            return $this->sendResponse('No Autheticated',403,'No Autheticated');
            die;
        }
        if($this->model){
            $this->where();
            
            $start = $this->request->getGet('start') ? $this->request->getGet('start') : 0;
            $length = $this->request->getGet('length') ? $this->request->getGet('length') : 10;

            $data = $this->model->join('levels','levels.id=visitors.id_level')->join('users','users.id_visitor=visitors.id')->where('level', 'Murid')->orderBy($this->model->table.'.id','desc')->findAll($length, $start);
            $this->where();
            $totalRecord = $this->model->countAllResults();
            if(method_exists($this,'afterIndex')){
                $data = $this->afterIndex($data);
            }
            return $this->sendResponse($data,201,[
                'totalRecord' => $totalRecord,
            ]);
        }
        return $this->sendResponse('Model Not Found',201,'Model Not Found '.$this->model);

    }

    public function teacher()
    {
        // echo 'Yes'; exit;
        if(is_null(session()->get('logged_in'))){            
            return $this->sendResponse('No Autheticated',403,'No Autheticated');
            die;
        }
        if($this->model){
            $this->where();
            
            $start = $this->request->getGet('start') ? $this->request->getGet('start') : 0;
            $length = $this->request->getGet('length') ? $this->request->getGet('length') : 10;

            $data = $this->model->join('levels','levels.id=visitors.id_level')->where('level', 'Guru')->orderBy($this->model->table.'.id','desc')->findAll($length, $start);
            $this->where();
            $totalRecord = $this->model->countAllResults();
            if(method_exists($this,'afterIndex')){
                $data = $this->afterIndex($data);
            }
            return $this->sendResponse($data,201,[
                'totalRecord' => $totalRecord,
            ]);
        }
        return $this->sendResponse('Model Not Found',201,'Model Not Found '.$this->model);

    }

    public function getGuru()
    {
        $data = $this->model->select('visitors.*')->WHERE('visitors.id_level=2')->findAll();
        return $this->sendResponse($data);
    }

    public function insert(){
        $this->validate([
            'name' => [
                'label'  => 'name',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'name Kosong'
                ]
            ],
            'gender' => [
                'label'  => 'gender',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'gender Kosong'
                ]
            ],
            'address' => [
                'label'  => 'address',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'address Kosong'
                ]
            ],
            'id_level' => [
                'label'  => 'id_level',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'address Kosong'
                ]
            ],
            
        ]);

        if($this->validator->run() == false){
            $message = '';
            foreach ($this->validator->getErrors() as $key => $value){
                $message .= $key.' '.$value.' <br>';
            }
            return $this->sendResponse($this->validator->getErrors(),501,$message);
        }else{
            $data = [                
                'name'      =>  $this->request->getPost('name'), 
                'gender'        =>  $this->request->getPost('gender'),
                'address'        =>  $this->request->getPost('address'),
                'id_level'        =>  $this->request->getPost('id_level'),
                
            ];
            $this->model->insert($data);
            return $this->sendResponse($this->model->find($this->model->getInsertID()),201,'Successfully insert post user');
        }
    }

    public function updated() {
            $id['id'] = $this->request->getPost('id');
            $data = [                
                'name'      =>  $this->request->getPost('name'), 
                'gender'        =>  $this->request->getPost('gender'),
                'address'        =>  $this->request->getPost('address'),
                
            ];
            $this->model->update($id,$data);
            return $this->sendResponse($this->model->find($this->model->getInsertID()),201,'Successfully insert post user');
    }

    public function getusers(){
        $dataList = $this->model->select('oauth_users.id,oauth_users.fullname,oauth_users.email,oauth_users.contact,oauth_users.level_id,oauth_levels.level')
                                ->join('oauth_levels','oauth_levels.id=oauth_users.level_id')
                                ->findAll();
        return $this->sendResponse($dataList);
    }

    public function login_verify()
	{
        // $user = $this->model->where('username' ,$this->request->getPost('email'))->where('password',sha1($this->request->getPost('password')))->first();
        // if(!$user){
        //     return $this->sendResponse([],422,'Username Or Password Wrong ');
        // }
        // $privileges = (new \App\Models\Setting\Privileges())
        //                 ->select('oauth_menus.name, access, oauth_menus.url')
        //                 ->join('oauth_menus','oauth_menus.id = oauth_levels_privileges.menu_id')
        //                 ->where('level_id', $user->level_id)->findAll();
        // //$modelLevel = new \App\Models\Setting\Level();
        // $role = (new \App\Models\Setting\Level())->find($user->level_id);
        // //SET SESSION
        // session()->set(array(
        //     'privileges'=> $privileges,
        //     'role'      => $role,
        //     'user'      => $user,
        //     'logged_in' => true,
        // ));

        // //SEND RESPONSE
        // return $this->sendResponse([
        //     'privileges'=> $privileges,
        //     'role'      => $role,
        //     'user'      => $user,
        // ],201,'Successfully Login '.$this->content);
        $post = $this->request->getPost();
        $user = $post['email'];
        $key = 'admin@gadaihartadinataabadi.com';

        if($user!=$key){
            return $this->sendResponse([],422,'Username Or Password Wrong ');
        }else{
            return $this->sendResponse([
                    'privileges'=> true,
                    'role'      => true,
                    'user'      => $user,
                ],201,'Successfully Login '.$this->content);
        }
	}

    public function logout() {
        session()->destroy();
        return redirect()->to(base_url('administrator/login'));
    }

}
