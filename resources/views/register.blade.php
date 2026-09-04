{{-- 
    Проект: toskt-web
    Файл: register.blade.php
    Автор: Copyright (c) 2026, Фесянов Илья (Fesyanov Ilya)
--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-[url('/public/images/wave.svg')] bg-no-repeat bg-bottom bg-fixed">
    <header class="flex justify-center p-5">
        <div class="flex flex-col justify-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-10 text-blue-400">
                <path fill-rule="evenodd" d="M2.25 5.25a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3V15a3 3 0 0 1-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 0 1-.53 1.28h-9a.75.75 0 0 1-.53-1.28l.621-.622a2.25 2.25 0 0 0 .659-1.59V18h-3a3 3 0 0 1-3-3V5.25Zm1.5 0v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5Z" clip-rule="evenodd" />
            </svg>
            <h2 class="font-semibold text-center">Отдел технического обеспечения и сопровождения компьютерной техники</h2>
        </div> 
    </header>
    <main class="flex flex-col justify-center p-6 pb-12">
        <div class="bg-white/80 backdrop-blur-xl mt-4 sm:mt-6 p-6 sm:p-10 mx-auto rounded-xl shadow-xl max-w-md w-full">
            <form action="{{ route('register') }}" autocomplete="off" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">ФИО</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 {{ $errors->has('name') ? 'text-red-400' : 'text-gray-400' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>                              
                        </div>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus class="pl-10 p-2 rounded-md text-sm w-full {{ $errors->has('name') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-violet-500 focus:ring-violet-500' }}" placeholder="Ваше ФИО">
                        @error('name')
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                </svg>                                                          
                            </div>
                        @enderror
                    </div>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700">Электронная почта</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 {{ $errors->has('email') ? 'text-red-400' : 'text-gray-400' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>                                                           
                        </div>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="pl-10 pr-10 p-2 rounded-md text-sm w-full {{ $errors->has('email') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-violet-500 focus:ring-violet-500' }}" placeholder="Ваша почта">
                        @error('email')
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                </svg>                                                          
                            </div>
                        @enderror
                    </div>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Пароль</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 {{ $errors->has('password') ? 'text-red-400' : 'text-gray-400' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>                                                           
                        </div>
                        <input type="password" id="password" name="password" class="pl-10 pr-10 p-2 rounded-md text-sm w-full {{ $errors->has('password') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-violet-500 focus:ring-violet-500' }}" placeholder="Ваш пароль">
                        @error('password')
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                </svg>                                                          
                            </div>
                        @enderror
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Подтвердите пароль</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 {{ $errors->has('password_confirmation') ? 'text-red-400' : 'text-gray-400' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>                              
                        </div>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="pl-10 pr-10 p-2 rounded-md text-sm w-full {{ $errors->has('password_confirmation') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-violet-500 focus:ring-violet-500' }}" placeholder="Ваш пароль">
                        @error('password_confirmation')
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                </svg>                                                          
                            </div>
                        @enderror
                    </div>
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="flex justify-center items-center rounded-md bg-blue-400 py-2 px-4 w-full text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
                    hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:ring-offset-2 transition duration-150 ease-in-out">Зарегистрироваться</button>
                </div>
            </form>
            <div class="flex justify-center items-center mt-6">
                <a href="{{ route('login') }}" class="font-medium text-sm text-blue-400 hover:text-blue-500">Уже есть аккаунт?</a>
            </div>
        </div>
    </main>
</body>
</html>