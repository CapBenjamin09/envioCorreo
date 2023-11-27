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
                        <form class="mx-32 space-x-6 col-start-1 col-end-4">
                            <div class="items-center">

                                <label class="block">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input type="file" class="block w-full text-sm text-slate-500
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-full file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-violet-50 file:text-violet-700
                                            hover:file:bg-violet-100
                                          "/>
                                </label>
                            </div>
                        </form>

                        <div class="col-span-2 col-start-4">
                            <x-secondary-button>
                                Enviar correos
                            </x-secondary-button>

                            <x-secondary-button>
                                Enviar correos
                            </x-secondary-button>
                        </div>

                </div>


                </div>
            </div>
        </div>


        <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <h2 class="text-2xl font-bold mb-4">Example Datatable</h2>
                <table id="example" class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Position</th>
                        <th class="px-4 py-2">Office</th>
                        <th class="px-4 py-2">Age</th>
                        <th class="px-4 py-2">Start date</th>
                        <th class="px-4 py-2">Salary</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border px-4 py-2">Tiger Nixon</td>
                        <td class="border px-4 py-2">System Architect</td>
                        <td class="border px-4 py-2">Edinburgh</td>
                        <td class="border px-4 py-2">61</td>
                        <td class="border px-4 py-2">2011/04/25</td>
                        <td class="border px-4 py-2">$320,800</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Garrett Winters</td>
                        <td class="border px-4 py-2">Accountant</td>
                        <td class="border px-4 py-2">Tokyo</td>
                        <td class="border px-4 py-2">63</td>
                        <td class="border px-4 py-2">2011/07/25</td>
                        <td class="border px-4 py-2">$170,750</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Ashton Cox</td>
                        <td class="border px-4 py-2">Junior Technical Author</td>
                        <td class="border px-4 py-2">San Francisco</td>
                        <td class="border px-4 py-2">66</td>
                        <td class="border px-4 py-2">2009/01/12</td>
                        <td class="border px-4 py-2">$86,000</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Cedric Kelly</td>
                        <td class="border px-4 py-2">Senior Javascript Developer</td>
                        <td class="border px-4 py-2">Edinburgh</td>
                        <td class="border px-4 py-2">22</td>
                        <td class="border px-4 py-2">2012/03/29</td>
                        <td class="border px-4 py-2">$433,060</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Airi Satou</td>
                        <td class="border px-4 py-2">Accountant</td>
                        <td class="border px-4 py-2">Tokyo</td>
                        <td class="border px-4 py-2">33</td>
                        <td class="border px-4 py-2">2008/11/28</td>
                        <td class="border px-4 py-2">$162,700</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Brielle Williamson</td>
                        <td class="border px-4 py-2">Integration Specialist</td>
                        <td class="border px-4 py-2">New York</td>
                        <td class="border px-4 py-2">61</td>
                        <td class="border px-4 py-2">2012/12/02</td>
                        <td class="border px-4 py-2">$372,000</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Herrod Chandler</td>
                        <td class="border px-4 py-2">Sales Assistant</td>
                        <td class="border px-4 py-2">San Francisco</td>
                        <td class="border px-4 py-2">59</td>
                        <td class="border px-4 py-2">2012/08/06</td>
                        <td class="border px-4 py-2">$137,500</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Herrod Chandler</td>
                        <td class="border px-4 py-2">Sales Assistant</td>
                        <td class="border px-4 py-2">San Francisco</td>
                        <td class="border px-4 py-2">59</td>
                        <td class="border px-4 py-2">2012/08/06</td>
                        <td class="border px-4 py-2">$137,500</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Ashton Cox</td>
                        <td class="border px-4 py-2">Junior Technical Author</td>
                        <td class="border px-4 py-2">San Francisco</td>
                        <td class="border px-4 py-2">66</td>
                        <td class="border px-4 py-2">2009/01/12</td>
                        <td class="border px-4 py-2">$86,000</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Cedric Kelly</td>
                        <td class="border px-4 py-2">Senior Javascript Developer</td>
                        <td class="border px-4 py-2">Edinburgh</td>
                        <td class="border px-4 py-2">22</td>
                        <td class="border px-4 py-2">2012/03/29</td>
                        <td class="border px-4 py-2">$433,060</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Airi Satou</td>
                        <td class="border px-4 py-2">Accountant</td>
                        <td class="border px-4 py-2">Tokyo</td>
                        <td class="border px-4 py-2">33</td>
                        <td class="border px-4 py-2">2008/11/28</td>
                        <td class="border px-4 py-2">$162,700</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Brielle Williamson</td>
                        <td class="border px-4 py-2">Integration Specialist</td>
                        <td class="border px-4 py-2">New York</td>
                        <td class="border px-4 py-2">61</td>
                        <td class="border px-4 py-2">2012/12/02</td>
                        <td class="border px-4 py-2">$372,000</td>
                    </tr>


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
