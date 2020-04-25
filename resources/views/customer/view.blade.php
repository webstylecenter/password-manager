@extends('adminlte::page')

@section('title', $customer->name)

@section('content_header')
    <h1 class="m-0 text-dark">{{ $customer->name }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @include('Components/Table', ['data' => $customer->domains])
                </div>
            </div>
        </div>
    </div>
@stop
