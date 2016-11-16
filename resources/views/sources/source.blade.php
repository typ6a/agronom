@extends('layouts.app')
@section('content')


{{$some_different_var}}

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Объявления</h3>
        </div>
        <div class="panel-body">
            @if (isset($ads) && count($ads) > 0)
            <table class="table table-striped task-table">
                <thead>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($ads as $ad)
                    <tr>
                        <td><a href="{{ url('source/ad/' . $ad->id) }}">{{ $ad->title }}</a></td>
                        @if ($ad->price !=0)
                        <td align="right">{{ $ad->price . '  р' }}</td>
                        @else 
                        <td align="right"> Цену уточняйте
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p style="font-size: 5px">Нет объявлений. Смотри в источниках</p>
        @endif
    </div>




</div>







@endsection
