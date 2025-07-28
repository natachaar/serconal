<?php

if (!function_exists('getSession')) {

    function getSession() {
        return \Config\Services::session()->get();
    }

}

if (!function_exists('getUserAgent')) {

    function getUserAgent() {
        return CodeIgniter\Config\Services::request()->getUserAgent();
    }

}

if (!function_exists('randomPassword')) {

    function randomPassword() {
        do {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array();
            $alphaLength = strlen($alphabet) - 1;
            for ($i = 0;
                    $i < 6;
                    $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            $pass = implode($pass) . '*';
        } while (!preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/', $pass));
        return $pass;
    }

}

if (!function_exists('getAvatar')) {

    function getAvatar(string $nombre): string {
        $initial = strtoupper(substr(trim($nombre), 0, 1));
        $initialLabel = strtoupper(substr(trim($nombre), 0, 2));

        $colorClasses = [
            'avatar-soft-primary',
            'avatar-soft-dark',
            'avatar-soft-info',
            'avatar-soft-danger',
            'avatar-soft-warning',
            'avatar-light'
        ];

        // Grupos de letras por índice
        $letterGroups = [
            'A' => 0, 'B' => 0, 'C' => 0, 'D' => 0, // Grupo 0
            'E' => 1, 'F' => 1, 'G' => 1, 'H' => 1, // Grupo 1
            'I' => 2, 'J' => 2, 'K' => 2, 'L' => 2, // Grupo 2
            'M' => 3, 'N' => 3, 'O' => 3, 'P' => 3, // Grupo 3
            'Q' => 4, 'R' => 4, 'S' => 4, 'T' => 4, // Grupo 4
            'U' => 5, 'V' => 5, 'W' => 5, 'X' => 5, 'Y' => 5, 'Z' => 5 // Grupo 5
        ];

        $groupIndex = isset($letterGroups[$initial]) ? $letterGroups[$initial] : 5;

        $assignedClass = $colorClasses[$groupIndex];

        return '<span class="avatar avatar-sm ' . $assignedClass . ' avatar-circle">
                    <span class="avatar-initials">' . $initialLabel . '</span>
                </span>';
    }

}
