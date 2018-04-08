@extends('layouts.master')

@section('title', $title)

@section('content')

	This is {{$title}}

    <div id="capulin1">

    	<div id="aaa"></div>
        <div id="bbb"></div>
        <div id="fields">
            <div>
                <fieldset>
                    <legend>Wiki</legend>
                    Text <textarea type="text" id="text"></textarea>
                    <input id="doit" type="button" value="Do it.">
                </fieldset>
            </div>

            <div>
                <textarea id="pickmeup"></textarea>
            </div>
            
            
        </div>
        
        <div>
            <textarea id="names3"></textarea>
        </div>
    </div>




@endsection

@section('footerScripts')
	@parent

    <script type="text/javascript" src="js/capulin1.js"></script>


@endsection