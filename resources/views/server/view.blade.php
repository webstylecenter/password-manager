@extends('adminlte::page')

@section('title', $server->ip)

@section('content_header')
    <h1 class="m-0 text-dark">{{ $server->ip }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            @include('form-elements.text', ['name' => 'Name', 'value' => $server->name])
                            @include('form-elements.text', ['name' => 'ip', 'value' => $server->ip])
                            @include('form-elements.text', ['name' => 'Root username', 'value' => $server->root_username])
                            @include('form-elements.text', ['name' => 'Root password', 'value' => $server->root_password])
                        </div>
                        <div class="col-6">
                            <h3>Comments</h3>
                            <textarea rows="20" class="form-control">{{ $server->comments }}</textarea>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3>Domains</h3>
                    @include('Components/Table', ['data' => $server->domains])
                </div>
            </div>
        </div>
    </div>
@stop
