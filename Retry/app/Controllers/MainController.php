<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\Models\MainModel;
use CodeIgniter\Test\TestLogger;

class MainController extends BaseController
{
    private $main;
    public function __construct()
    {
        $this->main = new \App\Models\MainModel();
    }

    public function delete($id)
    {

        $this->main->delete($id);
        return redirect()->to('/try');
    }
    public function index()
    {
        //
    }

    public function try()
    {
        
        $data['main'] = $this->main->findAll();
        return view('main', $data);
        // var_dump($data);
        // return view('main');
        // echo('Hello World');
    }
    public function edit($id)
    {   
        $data = [
            'pain' => $this->main->where('id', $id)->first(),
            'main' => $this->main->findAll()
        ];
    
        return view('main', $data);
    }
    public function save()
    {
        $data = [
            'Name' => $this->request->getVar('Name'),
            'Age' => $this->request->getVar('Age'),
            'Year' => $this->request->getVar('Year'),
            'Grade' => $this->request->getVar('Grade'),
        ];
        $this->main->save($data);
        return redirect()->to('/try');

    }

    
}
