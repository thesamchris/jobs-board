<x-layout>
    <x-slot:title>Jobs</x-slot:title>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="px-4 py-2 border-gray-200 border block rounded-lg">
                <p class="text-xs text-blue-600">{{ $job->employer->name }}</p>
                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $job['title'] }}</p>
                <p class="truncate text-xs leading-5 text-gray-500">Pays {{ $job['salary'] }}</p>
            </a>
        @endforeach

        {{ $jobs->links() }}
    </div>
</x-layout>
