<x-layout>
<div class="space-y-10">
    <section class="text-center pt-5">
        <h1 class="font-bold text-3xl">Find Your Dream Job!</h1>
    
        <form action="" class="mt-6">
            <input type="text" placeholder="BackEnd Developer" class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
        </form>
    </section>

    <section class="pt-10">
        <x-section-heading>Top Jobs</x-section-heading>

        <!-- A div for the styling of all job cards -->
        <div class="grid lg:grid-cols-3 gap-7 mt-6">
        <x-job-card />
        <x-job-card />
        <x-job-card />
        </div>
    </section>

    <section>
        <x-section-heading>Tags</x-section-heading>

        <div class="mt-6 space-x-1">
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        </div>

    </section>

    <section>
        <x-section-heading>Recent Jobs</x-section-heading>

        <div class="mt-6 space-y-6">
        <x-job-card-wide />
        <x-job-card-wide />
        <x-job-card-wide />
        </div>

    </section>
</div>
</x-layout>