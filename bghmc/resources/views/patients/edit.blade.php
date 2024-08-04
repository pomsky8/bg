<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('EDIT PATIENTS INFORMATION') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-validation-errors class="mb-4" :errors="$errors" />


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <form action="{{url('update-patients/' .$patients->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="Fname" :value="__('Fname')" />
                        <x-text-input id="Fname" class="block mt-1 w-full" type="text" name="Fname" :value="$patients->Fname" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="Lname" :value="__('Lname')" />
                        <x-text-input id="Lname" class="block mt-1 w-full" type="text" name="Lname" :value="$patients->Lname" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="Address" :value="__('Address')" />
                        <x-text-input id="Address" class="block mt-1 w-full" type="text" name="Address" :value="$patients->Address" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="Birthdate" :value="__('Birthdate')" />
                        <x-text-input id="Birthdate" class="block mt-1 w-full" type="date" name="Birthdate" :value="$patients->Birthdate" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="Admission" :value="__('Admission')" />
                        <x-text-input id="Admission" class="block mt-1 w-full" type="text" name="Admission" :value="$patients->Admission" required autofocus />
                    </div>

                    <x-primary-button class="ms-3">
                        {{ __('Update Patient Information') }}
                    </x-primary-button>


                </form> 

                </div>
            </div>
        </div>
    </div>



</x-app-layout>