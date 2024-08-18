<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-3 mt-4">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="flex gap-2 flex-row flex-wrap mt-4">
                <x-job-tags>Front End</x-job-tags>
                <x-job-tags>Back End</x-job-tags>
                <x-job-tags>UI</x-job-tags>
                <x-job-tags>UX</x-job-tags>
                <x-job-tags>Full Stack</x-job-tags>
                <x-job-tags>Project Manager</x-job-tags>
                <x-job-tags>Project Manager</x-job-tags>
                <x-job-tags>Project Manager</x-job-tags>
                <x-job-tags>Project Manager</x-job-tags>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
        </section>
    </div>
</x-layout>
