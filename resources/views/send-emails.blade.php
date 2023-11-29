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

                    @if(session('success'))
                        <div class="flex justify-center px-32 p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                            <span class="mr-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="h-5 w-5">
                                  <path
                                      fill-rule="evenodd"
                                      d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                      clip-rule="evenodd" />
                                </svg>
                            </span>
                            {{ session('success') }}
                        </div>
                    @endif

                    @error('file_excel')
                    <div class="flex justify-center px-24 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                        <span class="mr-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="h-5 w-5">
                              <path
                                  fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                  clip-rule="evenodd" />
                            </svg>
                        </span>
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="relative grid grid-cols-7 gap-2 ">
                        <form class="ml-32  col-start-1 col-end-6" action="{{ route('send-emails.store')}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="flex flex-row">
                                <label class="block basis-4/5">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input type="file" name="file_excel" id="file_excel" class="block w-full text-sm text-slate-500
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-full file:border-teal-400
                                            file:text-sm file:font-semibold
                                            file:bg-white file:text-teal-600
                                            hover:file:bg-violet-100
                                          "/>
                                </label>

                                <x-secondary-button type="submit" class=" py-2.5 px-6 rounded-lg text-sm font-medium bg-teal-200 text-teal-800 hover:bg-teal-400 active:bg-teal-400">
                                    Cargar Datos
                                </x-secondary-button>
                            </div>




                        </form>

                        <div>

                            <form method="POST" action="{{ route('sendEmail') }}" class="col-span-1 col-start-7">
                                @csrf
                                @method('GET')

                            <x-secondary-button type="submit" class="py-2.5 px-5 rounded-lg text-sm text-center font-medium text-white bg-teal-600 hover:bg-teal-500 active:bg-teal-500">
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
