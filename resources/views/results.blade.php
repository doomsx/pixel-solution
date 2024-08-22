<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="mt-4 space-y-4">
        @foreach ($jobs as $job)
            <x-job-card-expanded :job=$job/>
        @endforeach
    </div>
</x-layout>
