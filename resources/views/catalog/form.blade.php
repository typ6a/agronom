@extends('layouts.app')

@section('content')

<?php echo Form::model($user, array('route' => array('user.update', $user->id)))?>
@endsection

