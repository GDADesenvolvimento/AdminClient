@extends('admin_template')
@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css") }}">
@endsection
@section('header')
    <h1>
        Clientes
        <small>Lista com todos os clientes do sistema</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Clientes</a></li>
        <li class="active">Lista</li>
    </ol>
@endsection
@section('content')

    @if ( session()->has('success') )
        <div class="alert alert-success">
            <ul>
                <li>{{ session()->get('success') }}</li>
            </ul>
        </div>
    @endif
    <div class="box">
        <div class="box-body">
            <table class="tabela table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nome Fanstasia</th>
                    <th>E-mail de Contato</th>
                    <th>Telefone de Contato</th>
                    <th>Criado em</th>
                    <th>Alterado em</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td><a href="{{ route('client.edit', ['id' => $client->id]) }}">{{$client->nome}}</a></td>
                        <td>{{$client->email_contato}}</td>
                        <td>{{$client->telefone_contato}}</td>
                        <td>{{ dateFormat($client->created_at) }}</td>
                        <td>{{ dateFormat($client->updated_at) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <button class="btn btn-primary" onclick="location.href='{{route('client.form')}}'">Novo Cliente</button>
        </div><!-- /.box-footer -->
    </div><!-- /.box -->
@endsection
@section('script')
    <!-- DataTables -->
    <script src="{{ asset ('/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset ('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset ('/js/dataTables.custom.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset ('/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
@endsection