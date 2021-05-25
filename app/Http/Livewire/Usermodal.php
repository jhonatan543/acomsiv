<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Http\Requests\RequestUpdateUser;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\TemporaryUploadedFile;
use Illuminate\Support\Facades\Storage;

class Usermodal extends Component
{
    use WithFileUploads;

    public $showModal = 'hidden';
    public $name = '';
    public $lastname = '';
    public $email = '';
    public $role = '';
    public $user = null;
    public $action = '';
    public $method = '';
    public $nombreModal = '';
    public $password = '';
    public $password_confirmation = '';
    public $profile_photo_path = null;

    protected $listeners = [

        'showModal' => 'sacarModal',
        'showModalNewUser' => 'sacarModalNuevo'
    ];


    public function render()
    {
        return view('livewire.usermodal');
    }

    public function sacarModal(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->lastname = $user->lastname;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->nombreModal = 'Editar Usuario';
        $this->action = 'Actualizar';
        $this->method = 'actualizarUsuario';
        $this->showModal = '';
    }
    public function cerrarModal(){

        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function sacarModalNuevo(){

        $this->user = null;
        $this->action = 'Registrar';
        $this->method = 'registrarUsuario';
        $this->nombreModal = 'Registrar Usuario';
        $this->showModal = '';
    }


    public function actualizarUsuario()
    {
        $requestUser = new RequestUpdateUser();
        $values =  $this->validate($requestUser->rules($this->user),$requestUser->messages());


        $this->removeImage($this->user->profile_photo_path);

        if($values['profile_photo_path']){
        $profile = ['profile_photo_path' => $this->loadImage($values['profile_photo_path'])];
        $values = array_merge($values, $profile);
       }

    $this->user->update($values);
       $this->emit('userListUpdate');
       $this->resetErrorBag();
       $this->resetValidation();
       $this->reset();
    }

    public function updated($label)
    {
        $requestUser = new RequestUpdateUser();
        $this->validateOnly($label,$requestUser->rules($this->user),$requestUser->messages());
    }

    public function registrarUsuario()
    {
        $requestUser = new RequestUpdateUser();
        $values =  $this->validate($requestUser->rules($this->user),
        $requestUser->messages());

        $user = new User;
        $user->fill($values);
        if($values['profile_photo_path']){
            $user->profile_photo_path = $this->loadImage($values['profile_photo_path']);
        }
        $user->password = bcrypt($values['password']);
        DB::transaction(function() use ($user){
            $user->save();
        });
        $this->emit('userListUpdate');
        $this->cerrarModal();
    }

    private function loadImage(TemporaryUploadedFile $image)
    {
        $extension = $image->getClientOriginalExtension();
        $location = \Storage::disk('public')->put('img',$image);
        return $location;
    }

    public function removeImage($profile_photo_path)
    {
        if(!$profile_photo_path){
            return;
        }
        if(Storage::disk('public')->exists($profile_photo_path)){
            Storage::disk('public')->delete($profile_photo_path);
        }
    }
}
