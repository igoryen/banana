@extends('layouts.master')

@section('title', $title)

@section('content')
	This is {{$title}}
@endsection

@section('footerScripts')
	@parent

	<script type="text/javascript" src="dashboard.js"></script>
@endsection