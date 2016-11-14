@extends('layouts.app')
@section('content')
<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong> {{ $ad->title }}</strong>
        </div>
        <div class="panel-body">
        
            <table class="table table-striped task-table">
                <thead>
                <th>Характеристики</th>
                <th>&nbsp;</th>
                </thead>
                <tbody>




                    
                    <tr>
                        <td class="text-info">Цена: </td><td class="text-info">{{ $ad->price }} р.</td>
                    </tr>
                </tbody>
            </table>


        </div>
    </div>
    </div>

    @endsection



