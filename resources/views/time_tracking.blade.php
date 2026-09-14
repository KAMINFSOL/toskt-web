{{-- 
    Проект: toskt-web
    Файл: time_tracking.blade.php
    Автор: Copyright (c) 2026, Фесянов Илья (Fesyanov Ilya)
--}}

@include('layouts.header', ['title' => 'Учёт рабочего времени', 'headerTitle' => 'Учет рабочего времени'])
    <main>
        <div class="bg-white/80 backdrop-blur-xl mt-4 sm:mt-5 p-3 sm:p-5 mx-auto rounded-xl shadow-xl max-w-370">
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
        </div>
    </main>
    @include('layouts.footer_lite')
</body>
</html>