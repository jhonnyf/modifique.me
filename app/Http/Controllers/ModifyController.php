<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModifyController extends Controller
{
    public function index()
    {

        return view('modify.index');
    }

    public function change(Request $request)
    {
        $type = $request->type;

        if (method_exists(ModifyController::class, $type) === false) {
            return $response = [
                'error'   => true,
                'message' => 'Metodo inexistente!',
                'result'  => [],
            ];
        }

        $response = [
            'error'   => false,
            'message' => 'Conversão feita com sucesso!',
            'result'  => view('modify.ajax.change', ['text' => $this->$type($request->text)])->render(),
        ];

        return $response;
    }

    private function upper(string $text):string
    {
        return mb_strtoupper($text);
    }

    private function lower(string $text):string
    {
        return mb_strtolower($text);
    }

    private function ucWords(string $text):string
    {
        return ucwords($text);
    }

    private function ucFirst(string $text):string
    {
        return ucfirst($text);
    }
}
