<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(session("success"))
        <x-alert-message>
            {{ session("success") }}
        </x-alert-message>
    @endif

    @if(session("error"))
        <x-alert-message>
            {{ session("error") }}
        </x-alert-message>
    @endif

    <div class="mt-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 md:columns-2 xs:columns-1">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Uploading form for localization:") }}
                    <x-file-uploader></x-file-uploader>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="p-5 block">
                    <thead>
                        <tr>
                            <th>{{ __("Name") }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($files as $file)
                        <tr>
                            <td>{{ $file["name"] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
