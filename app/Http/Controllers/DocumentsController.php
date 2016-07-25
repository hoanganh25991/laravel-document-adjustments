<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Document;

class DocumentsController extends Controller
{
    public function show(Document $document){
    	return $document;
    }
}
