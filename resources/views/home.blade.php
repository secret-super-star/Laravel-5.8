@extends('layouts.app') @section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible" id="myAlert">
        <button type="button" class="close">&times;</button>
        <strong>Success!</strong> {!! $message !!}
    </div>
    <?php \Session::forget('success');?>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible" id="myAlert">
        <button type="button" class="close">&times;</button>
        <strong>Error!</strong> {!! $message !!}
    </div>
    <?php \Session::forget('error');?>
@endif

<div id="app"> 
    <main-component></main-component>
</div>

<a href="{{ route('send_mail') }}">Send Mail</a>

@endsection
