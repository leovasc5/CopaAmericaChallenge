<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chaveamento;
use App\Models\User;
// use App\Http\Controllers\Auth;

class CACController extends Controller
{
    public function valida_grupos_convidado(Request $request){
        return view('convidado.quartas', [
            'a1' => $request->A1,
            'a2' => $request->A2,
            'a3' => $request->A3,
            'a4' => $request->A4,
            'a5' => $request->A5,
            'b1' => $request->B1,
            'b2' => $request->B2,
            'b3' => $request->B3,
            'b4' => $request->B4,
            'b5' => $request->B5
        ]);
    }

    public function valida_quartas_convidado(Request $request){
        return view('convidado.semi', [
            'semi1' => $request->semi1,
            'semi2' => $request->semi2,
            'semi3' => $request->semi3,
            'semi4' => $request->semi4
        ]);
    }

    public function valida_semi_convidado(Request $request){
        return view('convidado.terceiro', [
            'final1' => $request->final1,
            'final2' => $request->final2,
            'terceiro1' => $request->terceiro1,
            'terceiro2' => $request->terceiro2
        ]);
    }

    public function valida_terceiro_convidado(Request $request){
        return view('convidado.final', [
            'final1' => $request->final1,
            'final2' => $request->final2,
            'terceiro' => $request->terceiro
        ]);
    }

    public function valida_premiacao_convidado(Request $request){
        return view('convidado.premiacao', [
            'campeao' => $request->campeao,
            'vice' => $request->vice,
            'terceiro' => $request->terceiro
        ]);
    }

    public function dashboard(){
        $chav = Chaveamento::orderBy('created_at', 'desc')->get();

        return view('dashboard', [
            'chav' => $chav,
        ]);
    }

    public function valida_entrada_grupos(){
        $user_id = auth()->user()->id;
        $dados = Chaveamento::where('id_usuario', $user_id)->first();
        if(isset($dados)){
            return view('jogo.replay');
        }else{
            return view('jogo.grupos');
        }
    }

    
    public function valida_grupos_jogo(Request $request){
        return view('jogo.quartas', [
            'a1' => $request->A1,
            'a2' => $request->A2,
            'a3' => $request->A3,
            'a4' => $request->A4,
            'a5' => $request->A5,
            'b1' => $request->B1,
            'b2' => $request->B2,
            'b3' => $request->B3,
            'b4' => $request->B4,
            'b5' => $request->B5
        ]);
    }

    public function valida_quartas_jogo(Request $request){
        return view('jogo.semi', [
            'semi1' => $request->semi1,
            'semi2' => $request->semi2,
            'semi3' => $request->semi3,
            'semi4' => $request->semi4
        ]);
    }

    public function valida_semi_jogo(Request $request){
        return view('jogo.terceiro', [
            'final1' => $request->final1,
            'final2' => $request->final2,
            'terceiro1' => $request->terceiro1,
            'terceiro2' => $request->terceiro2
        ]);
    }

    public function valida_terceiro_jogo(Request $request){
        return view('jogo.final', [
            'final1' => $request->final1,
            'final2' => $request->final2,
            'terceiro' => $request->terceiro
        ]);
    }

    public function valida_premiacao_jogo(Request $request){       
        $armazena = new Chaveamento;
        $armazena->campeao = $request->campeao;
        $armazena->vice = $request->vice;
        $armazena->terceiro = $request->terceiro;
        $armazena->criador = auth()->user()->name;
        $armazena->id_usuario = auth()->user()->id;
        $armazena->save();
        
        return view('jogo.premiacao', [
            'campeao' => $request->campeao,
            'vice' => $request->vice,
            'terceiro' => $request->terceiro
        ]);
    }

    public function destroy(){
        $id = auth()->user()->id;
        Chaveamento::where('id_usuario', $id)->delete();
        return redirect('/jogo/grupos');
    }

}