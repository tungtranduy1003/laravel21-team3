@extends('admins.layouts.index1')
@section('content_header')
    <h1>Create Room Type</h1>
@stop
@section('content')
    {!! Form::open(['url'=>'admins/roomTypes','files' => true ,'class' => 'form-horizontal' ])!!}
    @include('partials.forms.roomTypes')
    {!! Form::close() !!}
@stop
