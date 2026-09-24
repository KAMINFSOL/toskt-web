{{-- 
    Проект: toskt-web
    Файл: time_tracking.blade.php
    Автор: Copyright (c) 2026, Фесянов Илья (Fesyanov Ilya)
--}}

@include('layouts.header', ['title' => 'Учёт рабочего времени', 'headerTitle' => 'Учет рабочего времени'])
    <main class="animate-fade-in-up">
        <div class="flex gap-5 p-5">
            <a href="{{ route('time_mark') }}" class="flex justify-center items-center rounded-md bg-blue-400 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
            hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out cursor-pointer">+ Отметиться</a>
        </div>
        <div class="bg-white/95 backdrop-blur-xl mt-2 sm:mt-2 p-3 sm:p-5 mx-auto rounded-xl shadow-xl max-w-370">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="border-2 border-gray-300 p-3">Дата</th>
                        <th class="border-2 border-gray-300 p-3">ФИО</th>
                        <th class="border-2 border-gray-300 p-3">Время прихода на работу</th>
                        <th class="border-2 border-gray-300 p-3">Время ухода с работы</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($timeTrackings as $timeTracking)
                        <tr>
                            <td class="text-center border-gray-300 p-3 border-2">{{ Carbon\Carbon::parse($timeTracking->date)->format('d.m.Y') }}</td>
                            <td class="text-center border-gray-300 p-3 border-2">{{ $timeTracking->name }}</td>
                            <td class="text-center border-gray-300 p-3 border-2">{{ $timeTracking->arrival_time }}</td>
                            <td class="text-center border-gray-300 p-3 border-2">{{ $timeTracking->leave_time }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-2">
                {{ $timeTrackings->links() }}
            </div>
        </div>
    </main>
    @include('layouts.footer_lite')
</body>
</html>