@extends('template')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand navbar-light flex-column flex-md-row">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/logo.svg" />
                    </a>
                    <!--
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <a href="" class="user">
                            <span class="name">Olá Mauricio Silva</span>
                        </a>

                        <a href=""><i class="fas fa-search-plus"></i></a>

                        <a href=""><i class="fas fa-exclamation-triangle"></i><span class="total">10</span></a>

                        <a href=""><i class="fas fa-sign-out-alt"></i></a>

                        <button type="button" class="clear" onclick="openNav()">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                     -->
                </nav>

            </div>
        </div>
    </section>

    <section class="conteudo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-blue">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 d-flex">
                                <div class="box">
                                    <div class="row">

                                        <div class="col-lg-12 col-sm-12 text-center text-sm-left">
                                            <h4 class="font-weight-bold text-left my-4">Dados Cadastrais</h4>
                                            <p>
                                                <strong>CÓDIGO DO CLIENTE:</strong> 0000<br />
                                                <strong>RAZÃO SOCIAL:</strong> NOME DA EMPRESA LTDA<br />
                                                <strong>CNPJ:</strong> 00.000.000/0001-00<br />
                                                <strong>ENDEREÇO:</strong> RUA NOME SOBRENOME, 100<br />
                                                <strong>BAIRRO:</strong> NOME DO BAIRRO<br />
                                                <strong>CIDADE:</strong> NOME DA CIDADE<br />
                                                <strong>ESTADO:</strong> UF<br />
                                                <strong>CEP:</strong> 00000-000
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 contato">
                                <div class="box">

                                    <h4 class="font-weight-bold text-left my-4">Contato Principal (Obrigatório)</h4>

                                    <form action="{{ route('formulario') }}" method="post" id="formulario_contato">
                                        @csrf
                                        <input type="hidden" name="cod_cliente" value="{{ $cliente->id }}">
                                        <input type="hidden" name="contato" value="1">
                                        <div class="novocontato" id="novocontato">+ Adcionar mais um contato (Opicional)</div>

                                        <div style="margin-top:30px;" class="col-md-12">

                                            <input type="checkbox" name="aceite" />
                                            <label> Texto aqui.</label>

                                            <button type="submit" class="btn btn-primary">ENVIAR</button>
                                        </div>
                                    </form>

                                    <div class="row row-contato pb-5" style="display: none">
                                        <div class="col-md-12 title" style="display: none">
                                            <h4 class="font-weight-bold text-left my-4">
                                                Contato Adicional <span class="removecontato"> - Remover</span>
                                            </h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="nome[]" placeholder="Nome" class="form-control" required />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="telefone[]" placeholder="Telefone" class="form-control telefone" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="whatsapp[]" placeholder="WhatsApp" class="form-control telefone" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email[]" placeholder="E-mail" class="form-control" required />
                                        </div>
                                        <div class="col-md-12">
                                            <select name="cargo[]" class="form-control" required>
                                                <option value="">Selecione o cargo</option>
                                                <option value="Gerente de Compras">Gerente de Compras</option>
                                                <option value="Comprador Medicamentos">Comprador Medicamentos</option>
                                                <option value="Comprador de Higiene e Beleza">Comprador de Higiene e Beleza</option>
                                                <option value="Comprador">Comprador</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        const old = {!! json_encode(request()->input()) !!};
        const success = {!! json_encode($success) !!};
    </script>

    @include('footer')
@endsection
