<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index(): string {
        return view('layout/view_home_page');
    }

    public function login() {
        return view('layout/view_login');
    }

    public function singin() {

        $username = trim($this->request->getPost('username'));
        $password = trim($this->request->getPost('password'));

        $user = $this->GeneralModel->getRow('system_users', ['username' => $username, 'user_status' => 1]);

        if ($user) {
            if (md5($password) == $user->password) {
                $datos_session = [
                    'userId' => $user->id_system_users,
                    'username' => $user->username,
                    'userType' => $user->type_user
                ];
                $this->session->set('LoggedInAccount', $datos_session);
                $this->session->set('isLoggedIn', true);

                // Puedes retornar a dónde redireccionar en el frontend
                $redirect_url = ($user->type_user == 1) ? base_url('dashboard') : base_url('dashboard/' . $user->username);

                return $this->response->setJSON([
                            'status' => 'success',
                            'message' => 'Inicio de sesión exitoso.',
                            'redirect' => $redirect_url
                ]);
            } else {
                return $this->response->setJSON([
                            'status' => 'error',
                            'message' => 'Usuario o contraseña incorrectos.'
                ]);
            }
        } else {
            return $this->response->setJSON([
                        'status' => 'error',
                        'message' => 'Usuario o contraseña incorrectos.'
            ]);
        }
    }

    public function logout() {
        $this->session->destroy();
        return redirect()->to(base_url('login'));
    }
}
