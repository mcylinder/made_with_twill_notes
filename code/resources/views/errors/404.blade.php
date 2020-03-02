@extends('errors::minimal')

@section('title', __('Not Found'))
<div class="flex-center position-ref full-height">
    <div class="code">404</div>
    <div class="message" style="padding: 10px;">
        {{ $exception->getMessage() ?? ''}}Not Found
    </div>
</div>
@section('code', '404')

@section('message', __('Not Found'))
