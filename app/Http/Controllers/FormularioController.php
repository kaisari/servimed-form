<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Contato;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class FormularioController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return Response|RedirectResponse
     */
    public function __invoke(Request $request): Response | RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'cnpj' => 'required_without:cod_cliente',
            'cod_cliente' => 'required_without:cnpj',
        ]);
        $validator->setAttributeNames([
            'cnpj' => 'CNPJ',
            'cod_cliente' => 'Código do Cliente',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0]);
        }

        $cliente = Cliente::where('cnpj', preg_replace("/[^0-9]/", "", $request->input('cnpj')))
            ->orwhere('id', $request->input('cod_cliente'))
            ->first();

        if (!$cliente) {
            return back()->with('errors', 'Cadastro não localizado');
        }

        $success = false;
        if ($request->has('contato')) {
            $validator = Validator::make($request->all(), [
                'nome' => 'required|array',
                'email' => 'required|array',
                'cargo' => 'required|array',
                'nome.*' => 'required',
                'email.*' => 'required|email',
                'cargo.*' => 'required',
                'aceite' => 'accepted',
            ]);
            if ($validator->fails()) {
                alert()->error('Por favor verifique o formulário', implode('<br>', $validator->messages()->all()));
            } else {
                foreach ($request->input('nome') as $key => $value) {
                    Contato::create([
                        'nome' => $value,
                        'email' => $request->input('email')[$key],
                        'telefone' => $request->input('telefone')[$key],
                        'whatsapp' => $request->input('whatsapp')[$key],
                        'cargo' => $request->input('cargo')[$key],
                        'cliente_id' => $cliente->id,
                    ]);
                }

                alert()->success('Dados salvos com sucesso');
                $success = true;
            }
        }

        return response()->view('formulario', compact('cliente', 'success'));
    }
}
