@extends('layouts.app')

@section('content')
    <div class="container">
       
            <!-- categories -->
            @if (count($sources) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Каталог
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Источники</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                                              
                                
                                @foreach ($sources as $source)
                                <tr>
                                    <td><a href="{{ url('source/' . $source->id) }}">{{ $source->title }}</a></td>
                                </tr>
1                                @endforeach
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
       
    </div>
@endsection
