<x-layout>
    <x-slot:heading>

        <div class="flex justify-between">
            <h1>Jobs Page</h1>
            <a href="jobs/create"
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 ">Create
                Job</a>
        </div>
    </x-slot:heading>

    <h1 class=" text-xl  font-bold">Jobs</h1>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class=" block my-4 px-2 py-4 border border-gray-300">
                <h1 class="text-xl text-blue-500 "><b>{{ $job->employer->name }}</b></h1>
                <li class=""><strong>{{ $job['title'] }}</strong> : {{ $job['salary'] }} per year.</li>
            </a>
        @endforeach
    </ul>
    {{ $jobs->links() }}
</x-layout>
