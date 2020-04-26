<?php

use GuzzleHttp\Client;

defined('BASEPATH') or exit('No direct script access allowed');

class client_user_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/Vapor/api/'
        ]);
    }

    public function getAllUser()
    {
        $respone = $this->_client->request('GET', 'user', [
            'query' => [
                'api' => 'vape'
            ]
        ]);
        $result = json_decode($respone->getBody()->getContents(), true);
        return $result['data'];
    }
    public function getbyidUser($id)
    {
        $respone = $this->_client->request('GET', 'user', [
            'query' => [
                'id_user' => $id,
                'api' => 'vape'
            ]
        ]);
        $result = json_decode($respone->getBody()->getContents(), true);
        return $result['data'][0];
    }
    public function deleteById($id)
    {
        $respone = $this->_client->request('DELETE', 'user', [
            'form_params' => [
                'id_user' => $id,
                'api' => 'vape'
            ]
        ]);
        $result = json_decode($respone->getBody()->getContents(), true);
        return $result;
    }

    public function addNewUser()
    {

        $data = [
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'api' => 'vape'
        ];

        $respone = $this->_client->request('POST', 'user', [
            'form_params' => $data
        ]);
        $result = json_decode($respone->getBody()->getContents(), true);
        return $result;

    }

    public function ubahUser()
    {
        $data = [
            'id_user' => $this->input->post('id_user'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),
            'api' => 'vape'
        ];
        $respone = $this->_client->request('PUT', 'user', [
            'form_params' => $data
        ]);
        $result = json_decode($respone->getBody()->getContents(), true);
        return $result;
    }
}
    
    /* End of file welcome_model.php */
