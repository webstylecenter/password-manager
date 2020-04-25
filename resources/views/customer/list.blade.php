@extends('adminlte::page')

@section('title', 'Customers')

@section('content_header')
    <h1 class="m-0 text-dark">Customers</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(count($customers) > 0)
                        <table width="100%" class="table table-responsive table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Customer since</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $row)
                                <tr>
                                    <td><a href="{{ route('customer.view', [
                                        'id' => $row['id']
                                    ]) }}">{{ $row['name'] }}</a></td>
                                    <td>{{ $row['email'] }}</td>
                                    <td>{{ $row['created_at'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No records</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
