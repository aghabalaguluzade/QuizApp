<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
      <form action="{{ route('quizzes.questions.store', $quiz->id) }}" method="POST" class="px-10 py-10" enctype="multipart/form-data">
      @include('components.errors')
      @csrf
        <div class="mb-6">
          <label for="question" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sual</label>
          <textarea id="question" name="question" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Quiz Açıqlaması...">{{ old('question') }}</textarea>
        </div>

        <div class="mb-6">
          <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Şəkil</label>
          <input type="file" name="image" id="image" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Quiz Başlığ daxil edin..." />
        </div>

        <div class="mb-6">
          <label for="answer1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cavab1</label>
          <textarea id="answer1" name="answer1" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Quiz Açıqlaması...">{{ old('answer1') }}</textarea>
        </div>

        <div class="mb-6">
          <label for="answer2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cavab2</label>
          <textarea id="answer2" name="answer2" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Quiz Açıqlaması...">{{ old('answer2') }}</textarea>
        </div>

        <div class="mb-6">
          <label for="answer3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cavab3</label>
          <textarea id="answer3" name="answer3" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Quiz Açıqlaması...">{{ old('answer3') }}</textarea>
        </div>

        <div class="mb-6">
          <label for="answer4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cavab4</label>
          <textarea id="answer4" name="answer4" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Quiz Açıqlaması...">{{ old('answer4') }}</textarea>
        </div>
        
        <div class="mb-6">        
          <label for="correct_answer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Düzgün cavabı seçin...</label>
          <select id="correct_answer" name="correct_answer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option @if(old('correct_answer') === 'answer1') selected @endif value="answer1">Cavab 1</option>
            <option @if(old('correct_answer') === 'answer2') selected @endif value="answer2">Cavab 2</option>
            <option @if(old('correct_answer') === 'answer3') selected @endif value="answer3">Cavab 3</option>
            <option @if(old('correct_answer') === 'answer4') selected @endif value="answer4">Cavab 4</option>
          </select>
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