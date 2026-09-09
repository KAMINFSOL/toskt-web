{{-- 
    Проект: toskt-web
    Файл: request.blade.php
    Автор: Copyright (c) 2026, Фесянов Илья (Fesyanov Ilya)
--}}

@include('layouts.header', ['title' => 'Мои заявки', 'headerTitle' => 'Мои заявки'])
    <main class="mt-2">
        <div class="flex p-5">
            <a href="{{ route('new_request') }}" class="flex justify-center items-center rounded-md bg-blue-400 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
            hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out cursor-pointer">+ Новая заявка</a>
        </div>
        <div class="p-5">
            @foreach ($requests as $request)
                <div class="flex items-center gap-5 bg-white/80 backdrop-blur-xl p-3 sm:p-5 my-2 mx-auto rounded-xl shadow-xl max-w-370">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-15 text-blue-400">
                            <path d="M19.5 22.5a3 3 0 0 0 3-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 1 1-.712 1.321l-5.683-3.06a1.5 1.5 0 0 0-1.422 0l-5.683 3.06a.75.75 0 0 1-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 0 0 3 3h15Z" />
                            <path d="M1.5 9.589v-.745a3 3 0 0 1 1.578-2.642l7.5-4.038a3 3 0 0 1 2.844 0l7.5 4.038A3 3 0 0 1 22.5 8.844v.745l-8.426 4.926-.652-.351a3 3 0 0 0-2.844 0l-.652.351L1.5 9.589Z" />
                        </svg>
                    </div>
                    <div class="">
                        <div class="flex gap-3">
                            <h3 class="font-bold">{{ $request->number }} {{ Carbon\Carbon::parse($request->created_at)->format('d.m.Y H:i') }}</h3>
                            <span class="bg-blue-400 px-2 rounded-md font-bold text-white">Выполнена</span>
                        </div>
                        <p>{{ $request->from }} {{ $request->subdivision }} {{ $request->telephone }}</p>
                        <p>{{ $request->cabinet }} {{ $request->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>