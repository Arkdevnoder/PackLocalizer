<form enctype="multipart/form-data" action="/upload" method="POST">
    @csrf
    <x-input-label x-data="{'fileSelector': ''}" class="mt-2">
        <span x-text="fileSelector || 'Select file'"></span>
        <input @change="fileSelector = event.target.files[0] ? event.target.files[0].name : ''" class="hidden" type="file" name="archive">
    </x-input-label>
    <x-theme-button class="mt-3" type="submit">{{ __("Submit") }}</x-theme-button>
</form>