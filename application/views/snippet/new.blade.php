@layout('master')

@section('stylesheets')
	{{ HTML::style("css/style.css") }}
@endsection
@section('content')
{{ Form::open( "/" ) ;}}
 	{{ Form::textarea( 'snippet' , $snippet , array( 'id' => 'code' , 'spellcheck' => 'false' ) ) }}
 	<div class="btn-group nav">
	 	<input type="submit" id="send" value="Save Code" class="btn btn-success"/>
	 	<input type="reset" id="Clear" value="Clear" class="btn btn-danger"/>
 	</div>
 {{ Form::close() ;}}
@endsection

@section('scripts')
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/tabby.js') }}
	
    <script type="text/javascript">
	    $('#code').tabby();
    </script>
@endsection

