@include('layouts.header', ['title' => 'Редактировать статус заявки', 'headerTitle' => 'Редактировать статус заявки'])
    <main>
        <div class="bg-white/80 backdrop-blur-xl mt-6 sm:mt-10 p-6 sm:p-10 mx-auto rounded-xl shadow-xl max-w-md w-full animate-fade-in-up">
            <form action="" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6 w-full rounded-md shadow-sm">
                    <select name="status" id="status" class="p-2 rounded-md text-sm w-full {{ $errors->has('number') ? 'text-red-900 placeholder-red-300 border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-blue-400 focus:ring-blue-400' }}">
                        @foreach ($requests as $request)
                            <option value="{{ $request->status }}">{{ $request->status }}</option>
                            <option value="done">Выполнена</option>
                            <option value="canceled">Отменена</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit" class="flex justify-center items-center rounded-md bg-blue-400 py-2 px-4 w-full text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
                    hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out">Редактировать</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>