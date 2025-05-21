<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class ProductController extends Controller
	{
		private $products;
		
		public function __construct() {
			$this->products = [
				1 => [
					'name'     => 'product1',
					'price'    => 100,
					'quantity' => 5,
					'category' => 'category1',
				],
				2 => [
					'name'     => 'product2',
					'price'    => 200,
					'quantity' => 6,
					'category' => 'category2',
				],
				3 => [
					'name'     => 'product3',
					'price'    => 300,
					'quantity' => 7,
					'category' => 'category2',
				],
				4 => [
					'name'     => 'product4',
					'price'    => 400,
					'quantity' => 8,
					'category' => 'category3',
				],
				5 => [
					'name'     => 'product5',
					'price'    => 500,
					'quantity' => 9,
					'category' => 'category3',
				],
			];
		}
		
		public function show($params) {
			$this->title = 'Product Details';
			
			$n = (int)$params['n'];
			
			if (isset($this->products[$n])) {
				$product = $this->products[$n];
				$totalCost = $product['price'] * $product['quantity'];
				
				return $this->render('product/show', [
					'id' => $n,
					'product' => $product,
					'totalCost' => $totalCost
				]);
			} else {
				return $this->render('error/index', [
					'message' => 'Product not found'
				]);
			}
		}
		
		public function all() {
			$this->title = 'All Products';
			
			return $this->render('product/all', [
				'products' => $this->products
			]);
		}
	} 