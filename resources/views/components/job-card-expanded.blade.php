@props(['job'])


<x-panel class="gap-4">

    <div>
        <x-employer-logo/>
    </div>

    <div class="flex-1 space-y-2">
        <div class="self-start text-sm text-gray-400">{{$job->employer->name}}</div>
        <h3 class="text-xl font-bold group-hover:text-blue-600">{{$job->title}}</h3>
        <p class="text-gray-300">{{$job->schedule}} - From {{$job->salary}}</p>
    </div>

    <div class=" flex flex-row justify-between items-center mt-auto">
        <div class="inline-flex gap-2">
            @foreach ($job->tags as $tag)
                <x-job-tags size="small" :$tag/>
            @endforeach
        </div>
    </div>
</x-panel>
