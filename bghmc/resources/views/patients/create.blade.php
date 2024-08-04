<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ADD PATIENT') }}
        </h2>
    </x-slot>

    <div class="py-12">


        <x-success-status class="mb-4" :status="session('message')" />

        <x-validation-errors class="mb-4" :errors="$errors" />


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <form action="{{url('Add-patients')}}" method="POST">
                    @csrf

                    <div>
                        <x-input-label for="Fname" :value="__('FIRST NAME')" />
                        <x-text-input id="Fname" class="block mt-1 w-full" type="text" name="Fname" :value="old('Fname')" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="Lname" :value="__('LAST NAME')" />
                        <x-text-input id="Lname" class="block mt-1 w-full" type="text" name="Lname" :value="old('Lname')" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="Address" :value="__('ADDRESS')" />
                        <x-text-input id="Address" class="block mt-1 w-full" type="text" name="Address" :value="old('Address')" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="Birthdate" :value="__('BIRTHDATE')" />
                        <x-text-input id="Birthdate" class="block mt-1 w-full" type="date" name="Birthdate" :value="old('Birthdate')" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="Admission" :value="__('ADMISSION')" />
                        <x-text-input id="Admission" class="block mt-1 w-full" type="text" name="Admission" :value="old('Admission')" required autofocus />
                    </div>

                    <div class="py-8">
                    <x-primary-button class="ms-3">
                        {{ __('Save Patients Information') }}
                    </x-primary-button>
                    </div>


                </form> 

                </div>
            </div>
        </div>
    </div>



</x-app-layout>