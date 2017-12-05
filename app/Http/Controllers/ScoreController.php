<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    //
    public function index()
    {
        return view('form');
    }
    public function results(Request $request)
    {
        $results = [];
        $ascore = 0;
        $dscore =0;

        $valid = $request->validate([
        'A1' => 'required',
        'A2' => 'required',
        'A3' => 'required',
        'A4' => 'required',
        'A5' => 'required',
        'A6' => 'required',
        'A7' => 'required',
        'A8' => 'required',
        'A9' => 'required',
        'A10' => 'required',
        'A11' => 'required',
        'A12' => 'required',
        'A13' => 'required',
        'A14' => 'required',
        'A15' => 'required',
        'A16' => 'required',
        'A17' => 'required',
        'A18' => 'required',
        'A19' => 'required',
        'A20' => 'required',
        'A21' => 'required',
        'A22' => 'required',
        'A23' => 'required',
        'A24' => 'required',
        'A25' => 'required',
        'A26' => 'required',
        'A27' => 'required',
        'A28' => 'required',
        'A29' => 'required',
        'A30' => 'required',
        'A31' => 'required',
        'A32' => 'required',
        'A33' => 'required',
        'D1' => 'required',
        'D2' => 'required',
        'D3' => 'required',
        'D4' => 'required',
        'D5' => 'required',
        'D6' => 'required',
        'D7' => 'required',
        'D8' => 'required',
        'D9' => 'required',
        'D10' => 'required',
        'D11' => 'required',
        'D12' => 'required',
        'D13' => 'required',
        'D14' => 'required',
        'D15' => 'required'
        ]);

        foreach($valid as $key => $value){
            switch ($key){
                case 'A1':
                    $ascore += $value;
                    break;
                case 'A2':
                    $ascore += $value;
                    break;
                case 'A3':
                    $ascore += $value;
                    break;
                case 'A3':
                    $ascore += $value;
                    break;
                case 'A4':
                    $ascore += $value;
                    break;
                case 'A5':
                    $ascore += $value;
                    break;
                case 'A6':
                    $ascore += $value;
                    break;
                case 'A7':
                    $ascore += $value;
                    break;
                case 'A8':
                    $ascore += $value;
                    break;
                case 'A9':
                    $ascore += $value;
                    break;
                case 'A10':
                    $ascore += $value;
                    break;
                case 'A11':
                    $ascore += $value;
                    break;
                case 'A12':
                    $ascore += $value;
                    break;
                case 'A13':
                    $ascore += $value;
                    break;
                case 'A14':
                    $ascore += $value;
                    break;
                case 'A15':
                    $ascore += $value;
                    break;
                case 'A16':
                    $ascore += $value;
                    break;
                case 'A17':
                    $ascore += $value;
                    break;
                case 'A18':
                    $ascore += $value;
                    break;
                case 'A19':
                    $ascore += $value;
                    break;
                case 'A20':
                    $ascore += $value;
                    break;
                case 'A21':
                    $ascore += $value;
                    break;
                case 'A22':
                    $ascore += $value;
                    break;
                case 'A23':
                    $ascore += $value;
                    break;
                case 'A24':
                    $ascore += $value;
                    break;
                case 'A24':
                    $ascore += $value;
                    break;
                case 'A25':
                    $ascore += $value;
                    break;
                case 'A26':
                    $ascore += $value;
                    break;
                case 'A27':
                    $ascore += $value;
                    break;
                case 'A28':
                    $ascore += $value;
                    break;
                case 'A29':
                    $ascore += $value;
                    break;
                case 'A30':
                    $ascore += $value;
                    break;
                case 'A31':
                    $ascore += $value;
                    break;
                case 'A32':
                    $ascore += $value;
                    break;
                case 'A33':
                    $ascore += $value;
                    break;
                case 'D1':
                    $dscore += $value;
                    break;
                case 'D2':
                    $dscore += $value;
                    break;
                case 'D3':
                    $dscore += $value;
                    break;
                case 'D4':
                    $dscore += $value;
                    break;
                case 'D5':
                    $dscore += $value;
                    break;
                case 'D6':
                    $dscore += $value;
                    break;
                case 'D7':
                    $dscore += $value;
                    break;
                case 'D8':
                    $dscore += $value;
                    break;
                case 'D9':
                    $dscore += $value;
                    break;
                case 'D10':
                    $dscore += $value;
                    break;
                case 'D11':
                    $dscore += $value;
                    break;
                case 'D12':
                    $dscore += $value;
                    break;
                case 'D13':
                    $dscore += $value;
                    break;
                case 'D14':
                    $dscore += $value;
                    break;
                case 'D15':
                    $dscore += $value;
                    break;
                }
            }
            $results = [
                'anxiety'=>$ascore,
                'depression'=>$dscore
            ];

            return view('results')->with([
                'data' => $results
            ]);
        }
}