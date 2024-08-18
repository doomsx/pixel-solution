<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h2 class="text-3xl font-bold">Let's Find You A Great Job</h2>

            <form action="" class="mt-8">
                <input type="text" name="" value="" placeholder="Web Developer..." class="rounded-2xl bg-white/5 px-6 py-3 w-full max-w-2xl border border-white/10">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-3 mt-4">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="flex gap-2 flex-wrap mt-4">
                <x-job-tags size="base">Front End</x-job-tags>
                <x-job-tags>Back End</x-job-tags>
                <x-job-tags>UI/UX</x-job-tags>
                <x-job-tags>Full Stack</x-job-tags>
                <x-job-tags>Project Manager</x-job-tags>
                <x-job-tags>QA Tester</x-job-tags>
                <x-job-tags>Penetration Tester</x-job-tags>
                <x-job-tags>Network Engineer</x-job-tags>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-4 space-y-4">
                <x-job-card-expanded></x-job-card-expanded>
                <x-job-card-expanded></x-job-card-expanded>
                <x-job-card-expanded></x-job-card-expanded>
            </div>
        </section>
    </div>
</x-layout>
