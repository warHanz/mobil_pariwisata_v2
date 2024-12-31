<?php

namespace App\Http\Controllers\Front;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class TermAndConditionController extends Controller
{
    public function regulation()
    {
        try {
            $response = Http::get('http://127.0.0.1:8080/api/admin/regulations');
            $regulations = $response->json();

            return view('frontend.regulation.index', compact('regulations'));
        } catch (Exception $e) {
            return view('frontend.regulation.index', ['regulations' => []]);
        }
    }
}
