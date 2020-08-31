<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Email\Email;
use App\Models\SponsorModel;

class Booth extends BaseController
{
    protected $user;
    protected $sponsor;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->sponsor = new SponsorModel();
    }

    public function index($sponsorBooth)
    {
        $sponsorData = $this->sponsor->where('name', $sponsorBooth)
            ->findAll();

        $data = [
            'sponsorData' => $sponsorData
        ];

        // echo 'Ini booth sponsor';

        echo view('templates/header');
        echo view('booth', $data);
        echo view('templates/footer');
    }

    //--------------------------------------------------------------------

}