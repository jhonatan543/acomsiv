

<x-app-layout>
@if (Auth::user()->role  === 'admin')
      <div class="md:w-1/5 ">
            <livewire:sidebar />
        </div>

        <div class="md:w-full ">
            <h2 class="text-center mt-8">Gestionar Usuarios</h2>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <livewire:usertable />

                    </div>
                </div>
            </div>

        </div>

    @push('modals')
    <livewire:usermodal />
    @endpush
    @else

    <h1 class="text-center mt-8">Vista De Usuarios</h1>
    @endif
</x-app-layout>


