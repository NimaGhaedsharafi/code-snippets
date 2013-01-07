@layout('master')

@section('stylesheets')
	{{ HTML::style("css/style.css") }}
	{{ HTML::style("prettify/prettify.css") }}
@endsection
@section('content')
<pre class="prettyprint linenums">{{ $snippet }}</pre>
<div class="btn-group nav">
	{{ HTML::link_to_route( 'fork_snippet', 'Fork Me' , $id , array( 'class' => 'btn btn-warning')) }}
	{{ HTML::link_to_route( 'new_snippet', 'New Snippet' , $id , array( 'class' => 'btn btn-success')) }}
</div>
@endsection

@section('scripts')
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('prettify/prettify.js') }}
	<script>
		prettyPrint();
	</script>
@endsection

