<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;

class MainController extends BaseController
{
    public function index()
    {
        //
    }

    public function test()
    {
        $k = new MainModel();
      
        $data['main'] = $k->findAll();
        return view('main', $data);
        // var_dump($data);
    }
    public function save()
    {
        $data = [
        'StudentID' => $this->request->getPost('StudentID'),
        'FullName' => $this->request->getPost('FullName'),
        'YearLevel' => $this->request->getPost('YearLevel'),
        'Program' => $this->request->getPost('Program')
        ];

        $main = new MainModel();
        $main->save($data);
        return redirect()->to('/test');
    }

}
