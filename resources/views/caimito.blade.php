@extends('layouts.master')

@section('title', $title)

@section('content')
	This is {{$title}}

	<h1>Caimito</h1>
    <button>Start Animation</button>
    <p>
        By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!
    </p>
    <div style="background:#98bf21;height:100px;width:100px;position:absolute;">
    </div>





@endsection

@section('footerScripts')
	@parent

	<script type="text/javascript" src="js/caimito.js"></script>
@endsection