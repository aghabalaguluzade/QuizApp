<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
      <form action="{{ route('quizzes.store') }}" method="POST" class="px-10 py-10">
      @include('components.errors')
      @csrf
        <div class="mb-6">
          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quiz Başlığ</label>
          <input type="text" name="title" value="{{ $quiz?->title }}" id="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Quiz Başlığ daxil edin..." />
        </div>
        <div class="mb-6">
          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Açıqlama</label>
          <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Quiz Açıqlaması...">{{ $quiz->description }}</textarea>
        </div>
        <div class="mb-6" x-data="{ showEndTime: false }">
  <div class="flex items-start mb-6">
    <div class="flex items-center h-5">
      <div>
        <input id="terms" type="checkbox" x-on:click="showEndTime = !showEndTime" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
      </div>
    </div>
    <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
      Bitiş tarixi əlavə edəcəksiniz mi?
    </label>
  </div>
  <div class="mb-6" x-show="showEndTime">
    <label for="enddata" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quiz bitiş tarixi</label>
    <input type="datetime-local" value="{{ $quiz->finished_at }}" name="finished_at" id="enddates" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Quiz Başlığ daxil edin..." />
  </div>
</div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Əlavə et
        </button>
      </form>
    </div>
  </div>
</div>

</x-app-layout>