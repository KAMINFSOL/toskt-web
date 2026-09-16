{{-- 
    Проект: toskt-web
    Файл: knowledge_base.blade.php
    Автор: Copyright (c) 2026, Фесянов Илья (Fesyanov Ilya)
--}}

@include('layouts.header', ['title' => 'База знаний', 'headerTitle' => 'База знаний'])
    <main>
        <div class="flex gap-5 p-5">
            <a href="{{ route('new_article') }}" class="flex justify-center items-center rounded-md bg-blue-400 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
            hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out cursor-pointer">+ Добавить статью</a>
            <a href="{{ route('new_file') }}" class="flex justify-center items-center rounded-md bg-blue-400 py-1 px-3 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
            hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out cursor-pointer">+ Загрузить файл</a>
        </div>
    </main>
    @include('layouts.footer_lite')
</body>
</html>