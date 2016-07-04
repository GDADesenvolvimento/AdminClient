@extends('admin_template')
@section('header')
    <h1>
        Formulario de Cliente
        <small>Aqui você pode editar os clientes do sistema</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> CLiente</a></li>
        <li class="active">Formulario</li>
    </ol>
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('client.update') }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="{{ $client->id }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="nome" type="text" class="form-control" placeholder="Nome" value="{{ @$client->nome }}">
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="cnpj" type="text" class="form-control" data-inputmask='"mask": "99.999.999/9999-99"' data-mask placeholder="CNPJ" value="{{ @$client->cnpj }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="nome_fantasia" type="text" class="form-control" placeholder="Nome Fantasia" value="{{ @$client->nome_fantasia }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input name="endereco" type="text" class="form-control" placeholder="Endereço" value="{{ @$client->endereco }}">
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input name="numero" type="text" class="form-control" placeholder="Número" value="{{ @$client->numero }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input name="complemento" type="text" class="form-control" placeholder="Complemento" value="{{ @$client->complemento }}">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input name="bairro" type="text" class="form-control" placeholder="Bairro" value="{{ @$client->bairro }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map"></i></span>
                            <input name="municipio" type="text" class="form-control" placeholder="Municipio" value="{{ @$client->municipio }}">
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map"></i></span>
                            <input name="uf" type="text" class="form-control" placeholder="UF" maxlength="2" value="{{ @$client->uf }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input name="site" type="text" class="form-control" placeholder="Site" value="{{ @$client->site }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input name="email" type="email" class="form-control" placeholder="E-mail" value="{{ @$client->email }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input name="telefone_fixo" type="text" class="form-control" data-inputmask='"mask": "(99) 999-99999"' data-mask placeholder="Telefone Fixo" value="{{ @$client->telefone_fixo }}">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input name="telefone_movel" type="text" class="form-control" data-inputmask='"mask": "(99) 999-99999"' data-mask placeholder="Telefone Môvel" value="{{ @$client->telefone_movel }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tasks"></i></span>
                            <input name="atividade_principal" type="text" class="form-control" placeholder="Ativiadade Principal" value="{{ @$client->atividade_principal }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="responsavel" type="text" class="form-control" placeholder="Responsavel" value="{{ @$client->responsavel }}">
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                <a class="btn btn-danger pull-right" href="{{route('client.delete', ['id' => $client->id])}}">Remover Cliente</a>
            </div>
        </div><!-- /.box -->
    </form>
@endsection
@section('script')
    <!-- InputMask -->
    <script src="{{ asset ('/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset ('/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset ('/bower_components/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
    <script src="{{ asset ('/js/data-mask.js') }}"></script>
@endsection