{{-- 
    Проект: toskt-web
    Файл: plans.blade.php
    Автор: Copyright (c) 2026, Фесянов Илья (Fesyanov Ilya)
--}}

@include('layouts.header', ['title' => 'Планы и отчёты', 'headerTitle' => 'Планы и отчёты'])
    <main>
        <div class="flex flex-col justify-center items-center mt-10">
            @foreach ($plans as $plan)
                <div class="flex flex-col items-center justify-center gap-3 bg-white backdrop-blur-xl mt-4 sm:mt-1 p-6 sm:p-5 mx-auto rounded-xl shadow-xl max-w-370 w-full">
                    <h2 class="font-bold text-xl">{{ $plan->name }}</h2>
                    <img src="{{ $plan->image }}" class="w-200 h-160 mt-5" alt="img">
                    <p class="mx-10 mt-2">{{ $plan->description }}</p>
                </div>
            @endforeach
        </div>
    </main>
    @include('layouts.footer_lite')
</body>
</html>