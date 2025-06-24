<form enctype="multipart/form-data" action="/files" method="POST">
    @csrf
    <x-input-label x-data="{'fileSelector': ''}" class="mt-2 p-4 border-2 border-gray-200 border-dashed">
        <span x-text="fileSelector || 'Select file'"></span>
        <input @change="fileSelector = event.target.files[0] ? event.target.files[0].name : ''" class="hidden" type="file" name="fileSelector">
    </x-input-label>
    <x-theme-button class="mt-3" type="submit">{{ __("Submit") }}</x-theme-button>
</form>