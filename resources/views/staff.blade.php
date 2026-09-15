{{-- 
    Проект: toskt-web
    Файл: staff.blade.php
    Автор: Copyright (c) 2026, Фесянов Илья (Fesyanov Ilya)
--}}

@include('layouts.header', ['title' => 'Профиль', 'headerTitle' => 'Профиль'])
    <main>
        <div class="bg-white/80 backdrop-blur-xl mt-4 sm:mt-5 p-3 sm:p-5 mx-auto rounded-xl shadow-xl max-w-370">
            <table class="w-full">
                <caption class="pb-5 font-semibold">Список сотрудников ОТОиСКТ</caption>
                <thead>
                    <tr>
                        <th class="border-2 border-gray-300 p-3">ФИО</th>
                        <th class="border-2 border-gray-300 p-3">Дата рождения</th>
                        <th class="border-2 border-gray-300 p-3">Электронная почта</th>
                        <th class="border-2 border-gray-300 p-3">Должность</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="text-center border-gray-300 p-3 border-2">{{ $user->name }}</td>
                            <td class="text-center border-gray-300 p-3 border-2">{{ Carbon\Carbon::parse($user->birth_date)->format('d.m.Y') }}</td>
                            <td class="text-center border-gray-300 p-3 border-2">{{ $user->email }}</td>
                            <td class="text-center border-gray-300 p-3 border-2">{{ $user->post }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @include('layouts.footer_lite')
</body>
</html>