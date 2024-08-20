@props(['job'])
    <x-panel class="flex-col text-center">
        <div class="self-start text-sm">{{$job->employer->name}}</div>

        <div class="py-10 ">
            <h3 class="text-2xl group-hover:text-blue-600 font-bold">{{$job->title}}</h3>
            <p class="text-sm mt-4 font-medium">{{$job->schedule}} - From {{$job->salary}}</p>
        </div>

        <div class=" flex flex-row justify-between items-center mt-auto">
            <div class="inline-flex gap-2">
                @foreach ($job->tags as $tag)
                    <x-job-tags size="small" :$tag/>
                @endforeach
            </div>

            <x-employer-logo :width="42"/>
        </div>
    </x-panel>

