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
                                                <strong>CÓDIGO DO CLIENTE:</strong> {{$cliente->id}}<br />
                                                <strong>RAZÃO SOCIAL:</strong> {{$cliente->razao_social}}<br />
                                                <strong>CNPJ:</strong> {{\Clemdesign\PhpMask\Mask::apply($cliente->cnpj, '00.000.000/0000-00')}}<br />
                                                <strong>ENDEREÇO:</strong> {{$cliente->logradouro}}<br />
                                                <strong>BAIRRO:</strong> {{$cliente->bairro}}<br />
                                                <strong>CIDADE:</strong> {{$cliente->cidade}}<br />
                                                <strong>ESTADO:</strong> {{$cliente->uf}}<br />
                                                <strong>CEP:</strong> {{$cliente->cep}}
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
                                        <input type="hidden" name="cnpj" value="{{ $cliente->cnpj }}">
                                        <input type="hidden" name="contato" value="1">
                                        <div class="novocontato" id="novocontato">+ Adicionar mais um contato (Opcional)</div>

                                        <div style="margin-top:30px;" class="col-md-12">
                                            <button type="submit" class="btn btn-primary">ENVIAR</button>
                                        </div>
                                    </form>

                                    <div class="row row-contato pb-5" style="display: none">
                                        <div class="col-md-12 title" style="display: none">
                                            <h4 class="font-weight-bold text-left my-4">
                                                Contato Adicional <span class="removecontato"> - Remover</span>
                                            </h4>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="nome[]" placeholder="Nome" class="form-control" required />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="telefone[]" placeholder="Telefone" class="form-control telefone" required />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="whatsapp[]" placeholder="WhatsApp" class="form-control telefone" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email[]" placeholder="E-mail" class="form-control" required />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email_confirmacao[]" placeholder="Confirme o E-mail" class="form-control" required />
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

                                        <div class="col-md-12 pt-2">
                                            Não perca nenhuma campanha!<br>
                                            Para receber promoções e ofertas da Servimed, selecione o melhor canal para nosso contato:
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="contato_sms[]" id="contato_sms">
                                                <label class="form-check-label" for="contato_sms">SMS</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="contato_whatsapp[]" id="contato_whatsapp">
                                                <label class="form-check-label" for="contato_whatsapp">WhatsApp</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="contato_email[]" id="contato_email">
                                                <label class="form-check-label" for="contato_email">E-mail</label>
                                            </div>
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
