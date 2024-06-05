<x-layout>
    <x-slot:heading>
      {{ $job->employer->name }}
    </x-slot:heading>
    <h1 class="text-xl"><b>{{$job['title']}}</b></h1>
    <p>This job pays {{$job['salary']}} per year.</p>
    <div class="mt-3 flex gap-3">
      <a  class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 " href="{{ route('job.edit',$job) }}">Edit</a>
      <form action="{{ route('job.destory',$job) }}" method="POST" id="delete-form">
        @method("DELETE")
        @csrf
        <button  form="delete-form" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" >Delete</a>
      </form>
    </div>
</x-layout>
