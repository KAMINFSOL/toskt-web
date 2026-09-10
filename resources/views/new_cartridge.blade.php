{{-- 
    Проект: toskt-web
    Файл: new_cartridge.blade.php
    Автор: Copyright (c) 2026, Фесянов Илья (Fesyanov Ilya)
--}}

@include('layouts.header', ['title' => 'Добавить картридж', 'headerTitle' => 'Добавить картридж'])
    <main>
        <div class="bg-white/80 backdrop-blur-xl mt-6 sm:mt-10 p-6 sm:p-10 mx-auto rounded-xl shadow-xl max-w-md w-full">
            @if ($errors->all())
                <div class="rounded-md bg-red-50 border border-red-500 p-4 flex gap-3 mb-6">
                    <svg class="w-8 h-8 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                    </svg>                  
                    <h3 class="text-sm font-medium text-red-800">Не удалось произвести вход. Введённые данные некорректны</h3>
                </div> 
            @endif
            <form action="{{ route('new_cartridge') }}" autocomplete="off" novalidate method="POST">
                @csrf
                <div class="mb-6">
                    <label for="subdivision" class="block text-sm font-medium text-gray-700">Подразделение/Отдел</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 {{ $errors->has('subdivision') ? 'text-red-400' : 'text-gray-400' }}">
                                <path fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 0 1 8.25-8.25.75.75 0 0 1 .75.75v6.75H18a.75.75 0 0 1 .75.75 8.25 8.25 0 0 1-16.5 0Z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M12.75 3a.75.75 0 0 1 .75-.75 8.25 8.25 0 0 1 8.25 8.25.75.75 0 0 1-.75.75h-7.5a.75.75 0 0 1-.75-.75V3Z" clip-rule="evenodd" />
                            </svg>                                                           
                        </div>
                        <select name="subdivision" id="subdivision" class="pl-10 pr-10 p-2 rounded-md text-sm w-full {{ $errors->has('subdivision') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-blue-400 focus:ring-blue-400' }}" placeholder="Подразделение/Отдел">
                            @foreach ($subdivisions as $subdivision)
                                <option value="{{ $subdivision->name }}">{{ $subdivision->name }}</option>
                            @endforeach
                        </select>
                        @error('subdivision')
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            </svg>                                                          
                        </div>
                        @enderror
                    </div>
                    @error('subdivision')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="surname_name" class="block text-sm font-medium text-gray-700">ФИО</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 {{ $errors->has('surname_name') ? 'text-red-400' : 'text-gray-400' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                            </svg>                            
                        </div>
                        <input type="text" id="surname_name" name="surname_name" value="{{ old('surname_name') }}" class="pl-10 pr-10 p-2 rounded-md text-sm w-full {{ $errors->has('surname_name') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-blue-400 focus:ring-blue-400' }}" placeholder="ФИО">
                        @error('surname_name')
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                </svg>                                                          
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <label for="inventory_number" class="block text-sm font-medium text-gray-700">Инвентарный номер (необязательно)</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 {{ $errors->has('cartridge_name') ? 'text-red-400' : 'text-gray-400' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.25 2.25a3 3 0 0 0-3 3v4.318a3 3 0 0 0 .879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 0 0 5.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 0 0-2.122-.879H5.25ZM6.375 7.5a1.125 1.125 0 1 0 0-2.25 1.125 1.125 0 0 0 0 2.25Z" clip-rule="evenodd" />
                            </svg>                        
                        </div>
                        <input type="text" id="inventory_number" name="inventory_number" value="{{ old('inventory_number') }}" class="pl-10 pr-10 p-2 rounded-md text-sm w-full {{ $errors->has('inventory_number') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-blue-400 focus:ring-blue-400' }}" placeholder="Инвентарный номер">
                        @error('inventory_number')
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                </svg>                                                          
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="flex gap-5">
                    <div class="mb-6">
                        <label for="cartridge_name" class="block text-sm font-medium text-gray-700">Картридж</label>
                        <div class="relative rounded-md shadow-sm mt-1">
                            <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg class="h-5 w-5 {{ $errors->has('cartridge_name') ? 'text-red-400' : 'text-gray-400' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 0 0 3 3h.27l-.155 1.705A1.875 1.875 0 0 0 7.232 22.5h9.536a1.875 1.875 0 0 0 1.867-2.045l-.155-1.705h.27a3 3 0 0 0 3-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0 0 18 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM16.5 6.205v-2.83A.375.375 0 0 0 16.125 3h-8.25a.375.375 0 0 0-.375.375v2.83a49.353 49.353 0 0 1 9 0Zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 0 1-.374.409H7.232a.375.375 0 0 1-.374-.409l.526-5.784a.373.373 0 0 1 .333-.337 41.741 41.741 0 0 1 8.566 0Zm.967-3.97a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H18a.75.75 0 0 1-.75-.75V10.5ZM15 9.75a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V10.5a.75.75 0 0 0-.75-.75H15Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <select name="cartridge_name" id="cartridge_name" class="pl-10 pr-2 p-2 rounded-md text-sm w-full {{ $errors->has('cartridge_name') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-blue-400 focus:ring-blue-400' }}" placeholder="Подразделение/Отдел">
                                @foreach ($cartridge_names as $cartridge_name)
                                    <option value="{{ $cartridge_name->name }}">{{ $cartridge_name->name }}</option>
                                @endforeach
                            </select>
                            @error('cartridge_name')
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                    </svg>                                                          
                                </div>
                            @enderror
                        </div>
                    </div>
                     <div class="mb-6">
                    <label for="number_of_pieces" class="block text-sm font-medium text-gray-700">Количество</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 {{ $errors->has('number_of_pieces') ? 'text-red-400' : 'text-gray-400' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M21 6.375c0 2.692-4.03 4.875-9 4.875S3 9.067 3 6.375 7.03 1.5 12 1.5s9 2.183 9 4.875Z" />
                                <path d="M12 12.75c2.685 0 5.19-.586 7.078-1.609a8.283 8.283 0 0 0 1.897-1.384c.016.121.025.244.025.368C21 12.817 16.97 15 12 15s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.285 8.285 0 0 0 1.897 1.384C6.809 12.164 9.315 12.75 12 12.75Z" />
                                <path d="M12 16.5c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 0 0 1.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 0 0 1.897 1.384C6.809 15.914 9.315 16.5 12 16.5Z" />
                                <path d="M12 20.25c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 0 0 1.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 0 0 1.897 1.384C6.809 19.664 9.315 20.25 12 20.25Z" />
                            </svg>
                        </div>
                        <input type="number" id="number_of_pieces" name="number_of_pieces" value="{{ old('number_of_pieces') }}" class="pl-10 pr-4 p-2 rounded-md text-sm w-full {{ $errors->has('number_of_pieces') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-blue-400 focus:ring-blue-400' }}" placeholder="Количество">
                        @error('number_of_pieces')
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                </svg>                                                          
                            </div>
                        @enderror
                    </div>
                </div>
                </div>
                <div>
                    <button type="submit" class="flex justify-center items-center rounded-md bg-blue-400 py-2 px-4 w-full text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
                    hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out">Добавить</button>
                </div>
            </form>
        </div>
    </main>
    @include('layouts.footer_lite')
</body>
</html>