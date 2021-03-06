<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){

    		$users = [
            [
                'name' => 'User A',
                'phone' => '09855623232',
                'email' => 'a@gmail.com',
                'address' => 'yangon',
                'score' => [
                    'July' => 100,
                    'August' => 100,
                ]
            ],
            [
                'name' => 'User B',
                'phone' => '2828858282',
                'email' => 'b@gmail.com',
                'address' => 'mandalay',
                'score' => [
                    'July' => 50,
                    'August' => 20,
                ]
            ],
            [
                'name' => 'User C',
                'phone' => '827272727',
                'email' => 'c@gmail.com',
                'address' => 'Bagan',
                'score' => [
                    'July' => 60,
                    'August' => 45,
                ]
            ],
            [
                'name' => 'User D',
                'phone' => '4586957537',
                'email' => 'd@gmail.com',
                'address' => 'Bago',
                'score' => [
                    'July' => 70,
                    'August' => 10,
                ]
            ]
        ];
			
			return view('user',['users'=>$users]);

    }
}
