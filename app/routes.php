<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	
	# Criar Produto
	// $produto = new Product;
	// $produto->name = 'Barco';
	// $produto->save();

	# Consulta pelo Banco
	// $produtos = DB::table('products')->get();
	
	# Todos os Produtos
	// $produtos = Product::all();

	# Busca de Produto por ID
	// $produtos = Product::find(1);

	$produtos = DB::select('SELECT * FROM products WHERE id = ?', array(1));

	// Echo 
	echo $produtos;

});
