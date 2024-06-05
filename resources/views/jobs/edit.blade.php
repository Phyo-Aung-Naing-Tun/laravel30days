<x-layout>
    <x-slot:heading>
      Edit :: {{ $job->title }} 
    </x-slot:heading>
    

<form action="{{ route('job.update',$job) }}" method="POST" class="max-w-sm mx-auto">
    @csrf
    @method("PATCH")
    <div class="mb-2">
      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job Title</label>
      <input value="{{ $job->title }}" type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Programmer" required />
    </div>
    @error('title')
        {{ $message }}
    @enderror
    <div class="mb-5">
      <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salary</label>
      <input value="{{ $job->salary }}" placeholder="$50,000" type="text" id="salary" name="salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>
    @error('salary')
        {{ $message }}
    @enderror
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Edit</button>

    <a  class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" href="/jobs/{{ $job['id'] }}">Back</a>

    
  </form>


  
</x-layout>
