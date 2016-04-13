<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Anotações";
        $notas = [

            0 => 'Anotação 1',
            1 => 'Anotação 2',
            2 => 'Anotação 3'

        ];

        return view('teste.index', compact('notas', 'title'));
    }

    public function boleto()
    {

        $boleto = new \Eduardokum\LaravelBoleto\Boleto\Banco\Bb();
        $boleto->agencia = '3653';
        $boleto->conta = '31789';
        $boleto->carteira = '12';
        $boleto->numero = '2'; //numero sequencial vindo do banco de dados
        $boleto->convenio = '2016000';
        $boleto->contrato = '2016000';
        $boleto->identificacao = 'Rafael da Rocha Borges';
        $boleto->especieDocumento = 'DM';
        $boleto->aceite = 'N';
        $boleto->dataDocumento = '2016-22-02';
        $boleto->valor = '100';
        $boleto->dataVencimento = '2016-02-25';
        $boleto->nossoNumero = '';
        $boleto->cedenteDocumento = '01978904312';
        $boleto->cedenteNome = 'RAFAEL DA ROCHA BORGES';
        $boleto->cedenteEndereco = 'Rua, 123';
        $boleto->cedenteCidadeUF = 'Cidade - UF';
        $boleto->sacadoDocumento = '999.999.999-99';
        $boleto->sacadoNome = 'Ana Cabeleireiro';
        $boleto->sacadoEndereco = 'Rua, 123';
        $boleto->sacadoCidadeUF = 'Cidade - UF';

        $boleto->processar();

        $boleto->render();
        //return "ok";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
