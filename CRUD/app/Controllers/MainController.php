<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\Models\MainModel;

class MainController extends BaseController
{

    private $d;
    public function __construct()
    {
        $this->d = new \App\Models\MainModel();
    }
    public function update($id = null)
    {

        // $studentID = $this->request->getVar('studentID');
        // $fullname = $this->request->getVar('fullname');
        // $yearLevel = $this->request->getVar('yearLevel');
        // $program = $this->request->getVar('program');
       
        // $data = [
        //     'studentID' => $studentID,
        //     'fullname' => $fullname, 
        //     'yearLevel' => $yearLevel,
        //     'program' => $program, 
        // ];

        // $u->where('id', $id);
        // $u->update($data);


        // $data['u'] = $u->where('id', $id)->first();
        // return view('main', $data);
        // var_dump($r);
        // var_dump($data['r']);   

        $data = [
            'u' => $this->d->where('id', $id)->first(),
            'd' => $this->d->findAll(),
        ];
            return view('main', $data);
    }

    public function delete($id)
    {
        $this->d->delete(['id'=>$id]);
        return redirect()->to('/main');
    }
    public function save()
    {

        $id = isset($_POST['id']) ? $_POST['id'] : null; 

        $data = [
            'studentID' => $this->request->getVar('studentID'),
            'fullname' => $this->request->getVar('fullname'),
            'yearLevel' => $this->request->getVar('yearLevel'),
            'program' => $this->request->getVar('program'),
        ];

        if ($id != null){
            $this->d->set($data)->where('id',$id)->update();
                
            }else{
            $this->d->save($data);
            }
        
        return redirect()->to('/main');
    }
    
    public function mainPage()
    {
      
        $data['d'] = $this->d->findAll();
        return view('main', $data);
    }

   
    public function index()
    {
        //
    }

}
