<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Projects') }}
            <a href="{{ route('projects.create') }}"
                class="px-2 py-1 rounded-md  text-sm text-white bg-blue-500">{{ __('Create') }}</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border-collapse w-full text-center">
                    <thead>
                        <tr>
                            <th
                                class="text-center py-2 px-4 border-b border-gray-200 bg-sky-400 text-left text-sm font-bold uppercase">
                                {{ __('Status') }}</th>
                            <th
                                class="text-center py-2 px-4 border-b border-gray-200 bg-sky-400 text-left text-sm font-bold uppercase">
                                {{ __('Name') }}</th>
                            <th
                                class="text-center py-2 px-4 border-b border-gray-200 bg-sky-400 text-left text-sm font-bold uppercase">
                                {{ __('Company') }}</th>
                            <th
                                class="text-center py-2 px-4 border-b border-gray-200 bg-sky-400 text-left text-sm font-bold uppercase">
                                {{ __('Budget') }}</th>
                            <th
                                class="text-center py-2 px-4 border-b border-gray-200 bg-sky-400 text-left text-sm font-bold uppercase">
                                {{ __('Options') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $item)
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    @if ($item->status == 0)
                                        <span class="text-red-500 font-bold">{{ __('Inactive') }}</span>
                                    @else
                                        <span class="text-green-500 font-bold">{{ __('Active') }}</span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ $item->name }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ $item->unionTblCompanies->name }}
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">$
                                    {{ number_format($item->budget, 2, ',', '.') }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 flex items-center">
                                    <a href="{{ route('projects.edit', $item) }}"
                                        class="px-4 py-1 rounded text-white bg-green-500">{{ __('Edit') }}</a>
                                    <form action="{{ route('projects.destroy', $item) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <x-danger-button class="ml-3 rounded text-white" type="submit"
                                            onclick="return confirm('Are you sure; this change can not be reversed?')">
                                            {{ __('Delete') }}
                                        </x-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200"></td>
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
