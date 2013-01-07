<?php

class Snippets_Controller extends Base_Controller {

	public $restful = true;    

	public function post_create()
    {

    	$validaiton = Snippet::validate(Input::get());
    	if( $validaiton )
    		return Redirect::to_route('new_snippet');
    	$code = htmlentities(Input::get('snippet'));
    	$new_snippet = Snippet::create( array( 'snippet' => $code ) );
    	if( $new_snippet )
    	{
    		return Redirect::to_route('snippet', $new_snippet->id);
    	}
    }    

	public function get_show($id)
    {
    	$snippet = Snippet::find($id);
    	if( !$snippet ) 
    		return Redirect::to_route('new_snippet');
    	return View::make('snippet.show', $snippet->to_array());
    }    

    public function get_fork($id)
    {
    	$snippet = Snippet::find($id);
    	if( !$snippet ) 
    		 return Redirect::to_route('new_snippet');
    	return $this->get_new($snippet->snippet);
    }  

	public function get_new($default_snippet = '')
    {
    	return View::make('snippet.new')->with( array( 'snippet' => $default_snippet ) ) ;
    }    

}