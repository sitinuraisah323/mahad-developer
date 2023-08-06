<?php 
namespace App\Controllers;

use App\Middleware\Authenticated;
use App\Models\Area;
use App\Models\MonitoringOsView;
use App\Models\Notifications as ModelsNotifications;
use App\Models\pawn_transactionsModel;
use App\Models\Pengumuman;
use Prophecy\Doubler\ClassPatch\DisableConstructorPatch;
use CodeIgniter\Database\Postgre\Connection;


// use  CodeIgniter\Database\BaseConnection();
class Information extends Authenticated
{

	//  private $db1;
  
    // private $db2;
	
	public function index()
	{
		$pengumuman = new Pengumuman();
        $data['pengumuman'] = $pengumuman->getPengumuman();
		return view('users/information', $data);
	}

	
}

	
	