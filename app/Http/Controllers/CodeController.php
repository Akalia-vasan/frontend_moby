<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class CodeController extends Controller
{
    public function store(Request $request)
    {
        $response = Http::post(api_url('code/create'), [
            'digits' => $request->digits,
        ])->json();
        
        if($response == null)
        {
            $output = [
                'status' => 'fail',
                'color' => 'red'
            ];
        }
        else
        {
            $output = [
                'status' => 'success',
                'color' => 'green'
            ];
        }
        return redirect('tap')->with('status', $output);
    }


}
