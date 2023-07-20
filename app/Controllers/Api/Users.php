<?php namespace App\Controllers\Api;
use App\Controllers\Api\BaseApiController;

/**
 * Class Users
 * @package App\Controllers\Api
 * @author Enur Nurjaman
 * @contact 087xxx
 * @copyright sindigilive.com
 */


class Users extends BaseApiController
{
    public function __construct()
    {
        $db =  \Config\Database::connect(); // default database group
        $this->dbtests      = \Config\Database::connect('tests');
		$this->dbaccounting = \Config\Database::connect('accounting');
		$this->visitors = new \App\Models\Visitors();
        

    }

    public $modelName = '\App\Models\Users';

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

    public function insert(){
        $this->validate([
            'id_level' => [
                'label'  => 'id_level',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Level Kosong'
                ]
            ],
            
            'email' => [
                'label'  => 'email',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Email Kosong'
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
            $visitors = $this->visitors->select('id')->orderBy('id', 'desc')->first();
            foreach($visitors as $data){
                $id_visitor = $data;
            }
            $data = [                
                'id_visitor'    =>  $id_visitor, 
                'id_level'      =>  $this->request->getPost('id_level'),
                'email'         =>  $this->request->getPost('email'),
                'username'      =>  $this->request->getPost('username'),
                'password'      =>  password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                
            ];
            $this->model->insert($data);
            return $this->sendResponse($this->model->find($this->model->getInsertID()),201,'Successfully insert post user');
        }
    }

    public function updated() {
            $id['id'] = $this->request->getPost('id');
            $password_id = $this->request->getPost('password_id');
            $password = $this->request->getPost('password');
            
            $data = [                
                'id_visitor'    =>  $this->request->getPost('id_visitor'), 
                'id_level'      =>  $this->request->getPost('id_level'),
                'email'         =>  $this->request->getPost('email'),
                'username'      =>  $this->request->getPost('username'),
                'password'      => $password != NULL ? password_hash($password,PASSWORD_DEFAULT) : $password_id ,
                
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
        $user = $this->model->where('username' ,$this->request->getPost('email'))->where('password',sha1($this->request->getPost('password')))->first();
        if(!$user){
            return $this->sendResponse([],422,'Username Or Password Wrong ');
        }
        $privileges = (new \App\Models\Setting\Privileges())
                        ->select('oauth_menus.name, access, oauth_menus.url')
                        ->join('oauth_menus','oauth_menus.id = oauth_levels_privileges.menu_id')
                        ->where('level_id', $user->level_id)->findAll();
        //$modelLevel = new \App\Models\Setting\Level();
        $role = (new \App\Models\Setting\Level())->find($user->level_id);
        $data = $this->model
                ->select('visitors.*')
                ->join('levels', 'levels.id=users.id_level')
                ->join('visitors', 'visitors.id=users.id_visitor')
                ->where('users.id' ,$user->id)->first();
        // //SET SESSION
        session()->set(array(
            'privileges'=> $privileges,
            'role'      => $role,
            'user'      => $data,
            'logged_in' => true,
        ));

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
