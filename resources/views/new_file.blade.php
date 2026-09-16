<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файлов</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        .container { border: 1px solid #ddd; padding: 20px; border-radius: 8px; }
        .form-group { margin-bottom: 20px; }
        .btn { 
            padding: 10px 20px; 
            background: #4CAF50; 
            color: white; 
            border: none; 
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn:hover { background: #45a049; }
        .btn-download { background: #008CBA; }
        .btn-download:hover { background: #007399; }
        .alert { padding: 10px; margin-bottom: 20px; border-radius: 4px; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Загрузка файла</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">Выберите файл:</label>
                <input type="file" name="file" id="file" required>
                @error('file')
                    <div style="color: red; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn">Загрузить файл</button>
        </form>

        @if(isset($files) && $files->count() > 0)
            <h3>Список загруженных файлов</h3>
            <table>
                <thead>
                    <tr>
                        <th>Название</th>
                        <th>Размер</th>
                        <th>Дата загрузки</th>
                        <th>Действие</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $file)
                        <tr>
                            <td>{{ $file->name }}</td>
                            <td>{{ number_format($file->size / 1024, 2) }} KB</td>
                            <td>{{ $file->created_at }}</td>
                            <td>
                                <a href="{{ route('download.file', $file->id) }}" class="btn btn-download">
                                    Скачать
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>