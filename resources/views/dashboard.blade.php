{{-- 
    Проект: toskt-web
    Файл: dashboard.blade.php
    Автор: Copyright (c) 2026, Фесянов Илья (Fesyanov Ilya)
--}}

@include('layouts.header', ['title' => 'Главная оТОиСКТ', 'headerTitle' => 'Отдел ТОиСКТ'])
    <main>
        <div class="flex flex-col justify-center items-center mt-10">
            <h2 class="text-2xl font-bold mb-4">С возвращением, {{ auth()->user()->name }}!</h2>
            <div class="flex gap-3 mt-4 sm:mt-1 p-6 sm:p-5 mx-auto rounded-xl max-w-370 w-full">
                @foreach ($requests as $request)
                    <div class="flex items-center gap-5 bg-white/80 backdrop-blur-xl p-3 sm:p-5 my-2 mx-auto rounded-xl shadow-xl w-full">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-15 text-blue-400">
                                <path d="M19.5 22.5a3 3 0 0 0 3-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 1 1-.712 1.321l-5.683-3.06a1.5 1.5 0 0 0-1.422 0l-5.683 3.06a.75.75 0 0 1-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 0 0 3 3h15Z" />
                                <path d="M1.5 9.589v-.745a3 3 0 0 1 1.578-2.642l7.5-4.038a3 3 0 0 1 2.844 0l7.5 4.038A3 3 0 0 1 22.5 8.844v.745l-8.426 4.926-.652-.351a3 3 0 0 0-2.844 0l-.652.351L1.5 9.589Z" />
                            </svg>
                        </div>
                        <div class="">
                            <h3 class="font-bold flex items-center gap-3">
                                {{ $request->number }} 
                                {{ Carbon\Carbon::parse($request->created_at)->format('d.m.Y') }}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 text-blue-400">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                            </h3>
                            <div class="">
                                <span>{{ $request->from }} {{ $request->subdivision }} {{ $request->cabinet }}</span>
                            </div>
                            <span>{{ $request->description }}</span>
                            <div class="">
                                <span>{{ $request->telephone }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex flex-col justify-center items-center mt-10">
            <h2 class="text-2xl font-bold mb-4">Основная информация</h2>
            <div class="flex flex-col items-center justify-center gap-3 mt-4 sm:mt-1 p-6 sm:p-5 mx-auto rounded-xl max-w-370 w-full">
                @include('partials.files')
            </div>
        </div>
    </main>
    @include('layouts.footer_full')
</body>
</html>