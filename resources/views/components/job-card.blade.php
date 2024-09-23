<!-- Job Card Div -->
<x-panel class="flex flex-col text-center">
    <!-- A div for each section -->
    <div class="self-start text-sm">Name</div>

    <div class="py-7">
        <h1 class="group-hover:text-blue-500 text-xl font-bold transition-colors duration-300">Title</h1>
        <p class="text-sm mt-4">Full Time - 10,000$</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <!-- mt-auto class is to force this section to always be at the bottom of the card -->
        <div>
            <x-tag size="small">OOP</x-tag>
            <x-tag size="small">SOLID</x-tag>
            <x-tag size="small">API</x-tag>
        </div>
    <x-employer-logo :width="42"/>
    </div>
</x-panel>