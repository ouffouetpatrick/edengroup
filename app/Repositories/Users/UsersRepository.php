<?php
namespace App\Repositories\Users;

use App\User;
use App\Repositories\ResourceRepository;

class UsersRepository extends ResourceRepository
{
    public function __construct(User $users)
    {
        $this->model=$users;
    }
    public function find_user($id)
    {
    	return $this->model->where('id',$id)
    			->first();
    }
}