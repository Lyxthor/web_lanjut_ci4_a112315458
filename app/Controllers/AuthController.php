<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    function __construct() 
    {
        helper('form');
    }
    public function index()
    {
        return view('pages/login');
    }
    public function login()
    {
        if($this->request->getPost())
        {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataUser = ['username'=>'april', 'password'=>'202cb962ac59075b964b07152d234b70', 'role'=>'admin'];

            if($username == $dataUser['username'])
            {
                if(md5($password) == $dataUser['password'])
                {
                    session()->set([
                        'username'=>$username,
                        'role'=>$dataUser['role'],
                        'is_logged_in'=>true
                    ]);
                    return redirect()->to('/');
                }
                else 
                {
                    session()->setFlashdata(
                        'failed', 'Username / Password Salah'
                    );
                    return redirect()->to('/login');
                }
            }
            else 
            {
                session()->setFlashdata(
                    'failed', 'Username / Password Salah'
                );
                return redirect()->to('/login');
            }
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
