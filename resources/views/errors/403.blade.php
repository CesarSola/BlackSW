@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '4003')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
