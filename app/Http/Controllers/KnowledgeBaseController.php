<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnowledgeBaseController extends Controller
{
   public function create()
   {
        return view('knowledge_base');
   }
}
