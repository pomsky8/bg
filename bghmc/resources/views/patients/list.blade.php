<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('LIST OF PATIENTS') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-success-status class="mb-4" :status="session('message')" />

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        
        <table class="table table-boarder">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>ADDRESS</th>
                    <th>BIRTHDATE</th>
                    <th>ADDMISSION STATUS</th>
                    <th class="py-9">EDIT PATIENT</th>
                    <th class="px-11">DISCHARGE PATIENT</th>
                </tr>
            </thead>



            <tbody>
                @forelse ($patients as $patients)              

                <tr>
                    <td>{{$patients->id}}</td>
                    <td>{{$patients->Fname}}</td>
                    <td>{{$patients->Lname}}</td>
                    <td>{{$patients->Address}}</td>
                    <td>{{$patients->Birthdate}}</td>
                    <td>{{$patients->Admission}}</td>
                    
                    <td>
                        <a href="{{url('/edit-patients/'.$patients->id)}}" class="btn btn-secondary">Edit</a>
                    </td>

                    <td>
                        
                        <form action="{{ url('/delete-patients/'.$patients->id)}}" method="POST" class="px-1">
                            @csrf
                            @method('DELETE')
                            <x-danger-button class="btn btn-danger">Discharge</x-button>
                        </form></a>
                    </td>

                </tr>

                @empty
                <tr>
                    <td colspan="6">No Record Found</td>
                </tr>

                @endforelse



            </tbody>




        </table>
        
        </div>
    </div>
    </div>






    </x-app-layout>