<?php

namespace App\Controllers;
use App\Models\Usermodel;
class Home extends BaseController
{

    public function __construct() {

		$db = db_connect();
		$this->userModel = new UserModel($db);
	}
    public function login()
    {
        return view('login');
    }
    public function signup()
    {   
        $data=[];
        helper('form');
        if($this->request->getMethod()=='post')
        {
            // echo 222; exit; 
            // email number password utype submit

            $rules=[
                'name'=> 'required|min_length[3]|max_length[20]',
                'email'=> 'required|min_length[6]|max_length[30]valid_email|is_unique[users.email]',
                'number'=> 'required|min_length[10]|max_length[10]',
                'password'=> 'required|min_length[4]|max_length[10]',
                'utype'=> 'required',
                
            ];
            if(!$this->validate($rules))
            {
                $data['validation']=$this->validator;
            }else
            {
                $model=new Usermodel();
                $newdata=array(
                    'name'=>$this->request->getVar('name'),
                    'email'=>$this->request->getVar('email'),
                    'phone'=>$this->request->getVar('number'),
                    'password'=>$this->request->getVar('password'),
                    'user_type'=>$this->request->getVar('utype'),
                );

                // dd( $newdata);
                // $model->save($newdata);
                $result = $this->userModel->add($newdata);

            }
        }

        return view('signup');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
