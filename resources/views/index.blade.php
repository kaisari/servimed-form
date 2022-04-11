@extends('template')

@section('content')
    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="" class="logo" />

                    <form action="{{ route('formulario') }}" method="post">
                        @csrf
                        <h1>acesse sua conta</h1>
                        <p>Por favor, digite suas credenciais para fazer o login.</p>

                        <label for="">
                            CÓDIGO DO CLIENTE
                            <input type="text" name="cod_cliente" id="" value="{{old('cod_cliente')}}">
                        </label>
                        <label for="">
                            CNPJ
                            <input type="text" name="cnpj" id="" class="cnpj" value="{{old('cnpj')}}">
                        </label>

                        <button class="primary" type="submit">entrar</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
