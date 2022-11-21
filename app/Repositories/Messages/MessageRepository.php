<?php
namespace App\Repositories\Messages;

use App\Models\Messages\Message;
use App\Repositories\ResourceRepository;

class MessageRepository extends ResourceRepository
{
    public function __construct(Message $message)
    {
        $this->model=$message;
    }
}