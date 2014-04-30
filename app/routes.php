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
		
	# Consultas com o model product

	# Criar Produto
	// $produto = new Product;
	// $produto->name = 'Barco';
	// $produto->save();
	
	# Todos os Produtos
	// $produtos = Product::all();

	# Busca de Produto por ID
	// $produtos = Product::find(1);

	// echo $produtos;



	# Consultas com Queries

	# Todos os produtos de uma tabela
	// $produtos = DB::table('products')->get();

	# Inner join
	// $produtos = DB::table('products')
	// 		->join('product_models', 'products.id','=' ,'product_models.product_id')
	// 		->get();
	
	# Left join
	$produtos = DB::table('products')
			->leftjoin('product_models', 'products.id','=' ,'product_models.product_id')
			->get();

	// Echo 
	print_r($produtos);

});
