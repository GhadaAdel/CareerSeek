<!-- Job Card Div -->
@props(['job'])
<x-panel class="flex flex-col text-center">
    <!-- A div for each section -->
    <div class="self-start text-sm">{{ $job->employer->name}}</div>

    <div class="py-7">
        <h1 class="group-hover:text-blue-500 text-xl font-bold transition-colors duration-300">{{ $job->title}}</h1>
        <p class="text-sm mt-4">{{ $job->salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <!-- mt-auto class is to force this section to always be at the bottom of the card -->
        <div>
            @foreach($job->tags as $tag)
            <x-tag :$tag size="small" />
            @endforeach
        </div>
    <x-employer-logo :width="42"/>
    </div>
</x-panel>