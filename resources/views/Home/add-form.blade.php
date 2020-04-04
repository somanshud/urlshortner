@extends('layouts.app')

@section('title', 'Add Form')
@section('content')

<form action={{ action('HomeController@saveForm') }} method="post" id="student_form">
	{{ csrf_field() }}
	<label>First name</label><br>
	<input type="text" name="first_name" id="first_name"><br>
	<label>Last name</label><br>
	<input type="text" name="last_name" id="first_name"><br>
	<label>Email</label><br>
	<input type="email" name="email" id="email"><br>
	<input type="button" value="submit-button" id="submit">
</form>

<script>
	 $(document).ready(function(){
	    $("#submit").click(function(e){
	        e.preventDefault();
	        var baseUrl= $("#student_form").attr("action");

	        $.ajax({
	        	url : baseUrl,
	        	method: "POST",
	        	data: $("#student_form").serialize(),
	        	success: function(result){
        		alert("success");
    			}
	        });
	    });
	}); 
</script>

@endsection
	

