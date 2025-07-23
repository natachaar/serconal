<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface {

    public function before(RequestInterface $request, $arguments = null) {
        if (!session()->get('isLoggedIn')) {
            // Si el usuario no está logueado, redirigir al login
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        // Aquí puedes hacer algo después de la respuesta, si es necesario
    }
}
