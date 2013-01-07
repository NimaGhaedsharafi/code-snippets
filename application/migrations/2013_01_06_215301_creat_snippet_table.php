<?php

class Creat_Snippet_Table {    

	public function up()
    {
		Schema::create('snippets', function($table) {
			$table->increments('id');
			$table->text('snippet');
	});

    }    

	public function down()
    {
		Schema::drop('snippets');

    }

}