<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse w-full text-center">
                    <thead>
                        <tr>
                            <th
                                class="text-center py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">
                                {{ __('Status') }}</th>
                            <th
                                class="text-center py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">
                                {{ __('Name') }}</th>
                            <th
                                class="text-center py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">
                                {{ __('Company') }}</th>
                            <th
                                class="text-center py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">
                                {{ __('Budget') }}</th>
                            <th
                                class="text-center py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">
                                {{ __('Start date') }}</th>
                            <th
                                class="text-center py-2 px-4 border-b border-gray-200 bg-blue-500 text-left text-sm font-bold uppercase">
                                {{ __('Compliance date') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $item)
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    @if ($item->status == 0)
                                        <span class="text-red-500 font-bold">Inactive</span>
                                    @else
                                        <span class="text-green-500 font-bold">Active</span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">{{$item->name}}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{$item->unionTblCompanies->name}}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{$item->budget}}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{$item->start_date}}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{$item->compliance_date}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200"></td>
                                <td class="py-2 px-4 border-b border-gray-200"></td>
                                <td class="py-2 px-4 border-b border-gray-200"></td>
                                <td class="py-2 px-4 border-b border-gray-200"></td>
                                <td class="py-2 px-4 border-b border-gray-200"></td>
                                <td class="py-2 px-4 border-b border-gray-200"></td>
                            </tr>
                        @endforelse
                </table>
                {{ $projects->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
