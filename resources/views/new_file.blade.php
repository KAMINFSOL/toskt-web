{{-- 
    Проект: toskt-web
    Файл: new_file.blade.php
    Автор: Copyright (c) 2026, Фесянов Илья (Fesyanov Ilya)
--}}

@include('layouts.header', ['title' => 'Загрузить файл', 'headerTitle' => 'Загрузить файл'])
    <main class="animate-fade-in-up">
        <div class="bg-white/80 backdrop-blur-xl mt-6 sm:mt-10 p-6 sm:p-10 mx-auto rounded-xl shadow-xl max-w-160 w-160">
            @if(session('success'))
                <div class="rounded-md bg-green-100 border border-green-500 p-4 flex items-center gap-3 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-green-400">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-sm font-medium text-green-800">{{ session('success') }}</h3>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
            @endif

            <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-5 items-center">
                @csrf
                <div class="form-group">
                    <label for="file">Выберите файл:</label>
                    <input type="file" name="file" id="file" class="p-1 bg-gray-300 border-2 border-black rounded-md" required>
                    @error('file')
                        <div style="color: red; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btnflex justify-center items-center rounded-md bg-blue-400 py-2 px-4 w-140 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
                hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out">Загрузить файл</button>
            </form>
        </div>
    </main>