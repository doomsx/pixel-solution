<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h2 class="text-3xl font-bold">Let's Find You A Great Job</h2>

            <x-forms.form action="/search" class="mt-6">
                    <x-forms.input :label="false" name="q" type="text" placeholder="Web Developer"/>
            </x-forms.form>

        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-3 mt-4">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job=$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="flex gap-2 flex-wrap mt-4">
                @foreach ($tags as $tag)
                    <x-job-tags :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-4 space-y-4">
                @foreach ($jobs as $job)
                    <x-job-card-expanded :job=$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>

