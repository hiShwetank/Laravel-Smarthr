<?php

namespace App\Livewire\Apps\Chat;

use Livewire\Component;
use Livewire\WithPagination;
use RTippin\Messenger\Models\Thread;
use App\Livewire\Apps\MessengerHelper;

class ChatSidebar extends Component
{

    public $groupsEndpoint;
    public $groupName;



    public function createGroup(){
       $params['subject'] = $this->groupName;
        
       $notification = notify('Group has been created');
       return back()->with($notification);
    }

  
    public function render()
    {
        return view('livewire.apps.chat.chat-sidebar');
    }

    
}