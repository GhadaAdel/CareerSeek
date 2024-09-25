<!-- Job Card Div -->
@props(['job'])
<x-panel class="flex gap-x-6"> 
                <!-- A div for each section -->
                <div>
                    <x-employer-logo />
                </div>
                <div class="flex-1 flex flex-col" >
                <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name}}</a>
                    <h1 class="font-bold text-xl mt-3">{{ $job->title}}</h1>
                    <p class="text-sm text-gray-400 mt-auto">{{ $job->salary}}</p>
                </div>

                <div>
                    @foreach($job->tags as $tag)
                    <x-tag :$tag>Backend</x-tag>
                    @endforeach
                </div>
</x-panel>