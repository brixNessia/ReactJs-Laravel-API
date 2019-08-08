<?php
namespace App\Repository;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserRepository 
{

    public function createUser($data)
    {
        $user = new User();
        $user['name'] = $data['first_name']. ' ' .$data['last_name'];
        $user['password'] = Hash::make($data['password']);
        $user['email'] = $data['email'];
        
        return $user->save($data);
    }
    

}