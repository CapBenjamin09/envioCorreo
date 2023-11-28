<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Send emails') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="relative grid grid-cols-5 gap-2">
                        <form class="mx-32 space-x-6 col-start-1 col-end-4" action="{{ route('send-emails.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            @if(session('success'))
                                <div class="flex justify-center px-32 p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @error('file_excel')
                            <div class="flex justify-center px-32 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="items-center">
                                <label class="block">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input type="file" name="file_excel" id="file_excel" class="block w-full text-sm text-slate-500
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-full file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-violet-50 file:text-violet-700
                                            hover:file:bg-violet-100
                                          "/>
                                </label>
                            </div>
                            <x-secondary-button type="submit">
                                Cargar Datos
                            </x-secondary-button>
                        </form>

                        <div class="col-span-2 col-start-4">

                            <form method="POST" action="{{ route('sendEmail') }}">
                                @csrf
                                @method('GET')

                            <x-secondary-button type="submit">
                                Enviar correos
                            </x-secondary-button>
                            </form>

                        </div>

                    </div>


                </div>
            </div>
        </div>


        <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <h2 class="text-2xl font-bold mb-4">Lista de certificados</h2>
                <table id="example" class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Certificate Number</th>
                        <th class="px-4 py-2">Expiring Date</th>
                        <th class="px-4 py-2">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($emails as $email)
                        <tr>
                            <td class="border px-4 py-2">{{ $email->id }}</td>
                            <td class="border px-4 py-2">{{ $email->name }}</td>
                            <td class="border px-4 py-2">{{ $email->email }}</td>
                            <td class="border px-4 py-2">{{ $email->certificate_number }}</td>
                            <td class="border px-4 py-2">{{ $email->expiring_date }}</td>
                            <td class="border px-4 py-2">{{ $email->status }}</td>
                        </tr>
                    @endforeach

                    <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        // Add any customization options here
                    });
                });
            </script>
        </div>
        </div>
        </div>

    </div>
</x-app-layout>
