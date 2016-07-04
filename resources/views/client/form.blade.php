@extends('admin_template')
@section('header')
    <h1>
        Formulario de Cliente
        <small>Aqui você pode criar os clientes do sistema</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Cliente</a></li>
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
    <form action="{{ route('client.create') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="nome" type="text" class="form-control" placeholder="Nome" value="{{ old('nome') }}">
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="cnpj" type="text" class="form-control" data-inputmask='"mask": "99.999.999/9999-99"' data-mask placeholder="CNPJ" value="{{ old('cnpj') }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="nome_fantasia" type="text" class="form-control" placeholder="Nome Fantasia" value="{{ old('nome_fantasia') }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input name="endereco" type="text" class="form-control" placeholder="Endereço" value="{{ old('endereco') }}">
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input name="numero" type="text" class="form-control" placeholder="Número" value="{{ old('numero') }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input name="complemento" type="text" class="form-control" placeholder="Complemento" value="{{ old('complemento') }}">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input name="bairro" type="text" class="form-control" placeholder="Bairro" value="{{ old('bairro') }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map"></i></span>
                            <input name="municipio" type="text" class="form-control" placeholder="Municipio" value="{{ old('municipio') }}">
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map"></i></span>
                            <input name="uf" type="text" class="form-control" placeholder="UF" maxlength="2" value="{{ old('uf') }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input name="site" type="text" class="form-control" placeholder="Site" value="{{ old('site') }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input name="email" type="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input name="telefone_fixo" type="text" class="form-control" data-inputmask='"mask": "(99) 999-99999"' data-mask placeholder="Telefone Fixo" value="{{ old('telefone_fixo') }}">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input name="telefone_movel" type="text" class="form-control" data-inputmask='"mask": "(99) 999-99999"' data-mask placeholder="Telefone Môvel" value="{{ old('telefone_movel') }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tasks"></i></span>
                            <input name="atividade_principal" type="text" class="form-control" placeholder="Ativiadade Principal" value="{{ old('atividade_principal') }}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="responsavel" type="text" class="form-control" placeholder="Responsavel" value="{{ old('responsavel') }}">
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
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