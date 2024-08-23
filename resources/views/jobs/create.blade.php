<x-layout>
         <x-page-heading>Post A Job</x-page-heading>

        <x-forms.form method="POST" action="/jobs">
            <x-forms.input label="Title" name="title" placeholder="Fullstack"/>
            <x-forms.input label="Salary" name="salary" placeholder="$90,000"/>
            <x-forms.input label="Location" name="location" placeholder="Tokyo, Japan"/>

            <x-forms.select label="Schedule" name="schedule">
                <option class="text-black">Part Time</option>
                <option class="text-black">Full Time</option>
            </x-forms.select>

            <x-forms.input label="URL" name="url" placeholder="https//:acme.com/jobs/fulstack-wanted"/>

            <x-forms.checkbox label="Feature (cost extra)" name="featured" />

            <x-forms.divider/>

            <x-forms.input label="Tags (comma separated)" name="tags" placeholder="frontend, backend, team"/>

            <x-forms.button>Post</x-forms>
        </x-forms.form>
</x-layout>
