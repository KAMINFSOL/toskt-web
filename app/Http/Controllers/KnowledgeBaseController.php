<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KnowledgeBaseController extends Controller
{
   public function create()
   {
        return view('knowledge_base');
   }

   public function new_article()
   {
      return view('new_article');
   }

   public function new_file()
   {
      $files = File::latest()->get();
      return view('new_file', compact('files'));
   }

   public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $fileName = time() . '_' . $file->getClientOriginalName();

            $path = $file->storeAs('uploads', $fileName, 'public');

            $fileRecord = File::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
                'size' => $file->getSize(),
                'mime_type' => $file->getMimeType()
            ]);

            return back()->with('success', 'Файл загружен');
        }

        return back()->with('error', 'Не удалось загрузить файл');
    }

    public function download($id) 
    {
        $file = File::findOrFail($id);

        if (!Storage::disk('public')->exists($file->path)) {
            abort(404, 'Файл не найден');
        }

        return Storage::disk('public')->download($file->path, $file->name);
    }
}
