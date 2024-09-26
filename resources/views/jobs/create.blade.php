<x-layout>
    <x-page-heading>Post A Job</x-page-heading>
    <x-forms.form action="/jobs" method="POST">

    <x-forms.input label="Title" name="title" />
    <x-forms.input label="Salary" name="salary" />
    <x-forms.input label="Location" name="location" />

    <x-forms.select label="Schedule" name="schedule">
        <option>Part Time</option>
        <option>Full Time</option>
    </x-forms.select>

    <x-forms.input label="URL" name="url" />
    <x-forms.checkbox label="Feature" name="featured"/>

    <x-forms.divider />

    <x-forms.input label="Tags" name="tags" />

    <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>