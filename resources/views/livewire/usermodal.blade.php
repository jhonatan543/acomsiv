<div>
    <form wire:submit.prevent="{{$method}}">
        <x-component-user-modal :showModal="$showModal" :action="$action">

            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                {{ $nombreModal }}
                </h3>
                <div class="mt-2">

                    <div class="flex">
                        <x-component-user-input placeholder="Ingrese su nombre" name="name" label="Nombre"></x-component-user-input>
                        <x-component-user-input placeholder="Ingrese su apellido" name="lastname" label="Apellido"></x-component-user-input>
                    </div>
                    <div class="flex">
                        <x-component-user-input placeholder="Ingrese su correo" name="email" label="Correo"></x-component-user-input>
                        <x-component-user-input-select name="role" label="Rol" :options=" ['admin' => 'Administrador', 'cliente' => 'Cliente']  "></x-component-user-input-select>
                    </div>
                    <div class="flex">
                        <x-component-user-input placeholder="Ingrese su imagen" type="file" name="profile_photo_path" label="Imagen"></x-component-user-input>
                    </div>
                    @if($action == 'Registrar')
                    <div class="flex">
                        <x-component-user-input placeholder="Ingrese su clave" type="password" name="password" label="Clave"></x-component-user-input>
                        <x-component-user-input placeholder="Confirme su clave" type="password" name="password_confirmation" label="Confirmacion de Clave"></x-component-user-input>
                    </div>
                    @endif
                </div>
            </div>

        </x-component-user-modal>
    </form>
</div>
