<?php 
namespace App\Controllers;

use App\Middleware\Authenticated;
use App\Models\Summernote;
use App\Models\Subjects;

class SummernoteController extends Authenticated
{
    public function index()
    {
        $summernote = new Summernote();
        // $data['summernote'] = $summernote->getData();
        $result = $summernote->select('detail_materi.*, subject.name')
                             ->join('subject', 'detail_materi.subject = subject.id')
                             ->get()
                             ->getResult();
        $data['summernote'] = $result;
        return view('administrator/summernote/index', $data);
    }
    public function create()
    {
        $subject = new Subjects();
        $data['subject'] = $subject->findAll();
        // var_dump($data);
        return view('administrator/summernote/create', $data);
    }
    public function edit($id){
        $subject = new Subjects();
        $summernote = new Summernote();
        $data['subject'] = $subject->findAll();
        $data['summernote'] = $summernote->getData($id);
        return view('administrator/summernote/edit', $data);
    }

    public function updated($id){
        // echo "MASUK";
        $summernote = new Summernote();
        $summernote ->save([
            'id' => $id,
            'subject' => $this->request->getVar('subject'),
            'sub_subject' => $this->request->getVar('sub_subject'),
            'content' => $this->request->getVar('summernoteExample')
        ]);
        $data['summernote'] = $summernote->getData();
        return view('administrator/summernote/index', $data);
    }

    public function delete($id)
    {
        //cari gambar berdasarkan id
        $summernote = new Summernote();
        $summernote->delete($id);
        $data['summernote'] = $summernote->getData();
        return view('administrator/summernote/index', $data);
    }
}

?>