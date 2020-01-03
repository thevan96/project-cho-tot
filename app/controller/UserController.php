<?php
namespace Controller;

use Core\Controller;
use Core\Database;
use PDO;
use Helper\SessionHelper;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data['phone'] = trim($_POST['phone']);
            $data['password'] = trim($_POST['password']);

            $sql = sprintf(
                'SELECT idUser, firstName, lastName, password, phone FROM User WHERE phone = %s',
                $data['phone']
            );
            $account = Database::get($sql);
            $hashed_password = $account[0]['password'];
            if (count($account) < 1){
                $data['phoneErr'] = 'Tài khoản không tồn tại';
            }

            if (!password_verify($data['password'], $hashed_password)) {
                $data['passwordErr'] =
                    'Mật khẩu sai hoặc tài khoản không tồn tại';
            }

            if (empty($data['phoneErr']) && empty($data['passwordErr'])) {
                SessionHelper::saveSession([
                    'idUser' => $account[0]['idUser'],
                    'firstName' => $account[0]['firstName'],
                    'lastName' => $account[0]['lastName'],
                    'phone' => $account[0]['phone']
                ]);
                $this->redirect('home/index');
            } else {
                $this->renderView('user/login', $data);
            }
        } else {
            $data = [
                'phone' => '',
                'password' => '',
                'phoneErr' => '',
                'passwordErr' => ''
            ];
            $this->renderView('user/login');
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'firstName' => '',
                'lastName' => '',
                'phone' => trim($_POST['phone']),
                'password' => password_hash(
                    trim($_POST['password']),
                    PASSWORD_DEFAULT
                ),
                'avatar' => 'avatarDefault',
                'gender' => 'nam',
                'birthday' => date('Y-m-d'),
                'address' => '',
                'email' => '',
                'createAt' => date('Y-m-d H:i:s'),
                'status' => 1
            ];
            $dataError = [];
            $field = implode(', ', array_keys($data));
            $paramPlaceholder = ':' . implode(', :', array_keys($data));
            $sql = sprintf(
                'INSERT INTO User (%s) VALUES (%s)',
                $field,
                $paramPlaceholder
            );
            $status = Database::modify($sql, $data);
            if ($status) {
                $this->redirect('user/login');
            }
        } else {
            $data = [
                'firstName' => '',
                'lastName' => '',
                'phone' => '',
                'password' => '',
                'avatar' => '',
                'gender' => '',
                'birthday' => '',
                'address' => '',
                'email' => '',
                'createAt' => '',
                'status' => 1
            ];

            $dataError = [
                'firstName' => '',
                'lastName' => '',
                'phone' => '',
                'password' => '',
                'avatar' => '',
                'gender' => '',
                'birthday' => '',
                'address' => '',
                'email' => '',
                'createAt' => '',
                'status' => 1
            ];
            $this->renderView('user/register');
        }
    }

    public function logout()
    {
        SessionHelper::deleteSession();
        $this->redirect('home/index');
    }

    public function profile()
    {
    }
}
