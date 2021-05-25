<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Apellido;

class Usertable extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = '5';
    public $user_role = '';
    public $camp = null;
    public $order = null;
    public $icon = '-circle';
    public $showModal = 'hidden';

    protected $queryString = [
        'search'=> ['except'=> ''],
        'camp' => ['except'=>null],
        'order' => ['except'=>null],
        'perPage' => ['except'=> '5'],
        'user_role'=> ['except'=> ''],
    ];

    protected $listeners = [

        'userListUpdate' => 'render',
        'deleteUserList' => 'deleteUser'
    ];


    public function render()
    {
        $users = User::termino($this->search)
        ->role($this->user_role);



        if($this->camp && $this->order){

                $users = $users->orderBy($this->camp, $this->order);
        }
        else{
            $this->camp = null;
             $this->order = null;
        }
        $users = $users->paginate($this->perPage);

        return view('livewire.usertable', [
            'users' => $users ,

        ]);
    }
    public function clear(){
        $this->reset();

    }
    public function deleteUser(User $user){

        $user->delete();
          $this->emit('deleteUser', $user);
}

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function mount(){
        $this->icon = $this->iconDirection($this->order);
    }

    public function sortable($camp)
    {
        if($camp !== $this->camp){
            $this->order = null;
        }
        switch ($this->order) {
            case null:
                $this->order = 'asc';

                break;
            case 'asc':
                $this->order = 'desc';

                break;
            case 'desc':
                $this->order = null;

                break;
        }
        $this->icon =$this->iconDirection($this->order);
        $this->camp = $camp;
    }

    public function iconDirection($sort):string
    {
        if(!$sort){
            return '-circle';
        }
        return $sort === 'asc' ? '-arrow-circle-up' : '-arrow-circle-down';
    }

    public function showModal(User $user){
        if($user->name){
          $this->emit('showModal',$user);
        } else {
            $this->emit('showModalNewUser');
        }
    }

    public function showImage(User $user){
        if($user->name){
          $this->emit('showImage',$user);
        } else {
           return;
        }
    }
}
