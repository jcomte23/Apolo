<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Status</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Name</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Company</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Budget</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Start date</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">Compliance date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">Tiger Nixon</td>
                            <td class="py-2 px-4 border-b border-gray-200">System Architect</td>
                            <td class="py-2 px-4 border-b border-gray-200">Edinburgh</td>
                            <td class="py-2 px-4 border-b border-gray-200">$320,800</td>
                            <td class="py-2 px-4 border-b border-gray-200">2011-04-25</td>
                            <td class="py-2 px-4 border-b border-gray-200">2014-04-25</td>
                        </tr>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>
