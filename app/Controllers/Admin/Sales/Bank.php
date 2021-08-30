<?php
	
	namespace App\Controllers\Admin\Sales;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use App\Models\Bank_method;

	Class Bank extends Controller
	{
		/**
		* Load View Order List
		*/
		public function index()
		{
			Sesion::cekBelum();

			if($_SESSION['lev_name'] != 'Administrator')
			{
				redirect(base_url);			
			}

			// Bank Method
			$data = Bank_method::all();

			// Load view
			view('admin/main-page', [
				'page' => 'sales/bank',
				'title' => 'Bank',
				'records' => $data,
				'plugin' => 'datatables',
				'navigation' => ['Sales'],
				'breadcrumb_1' => 'Dashboard',
				'breadcrumb_2' => 'Sales',
				'breadcrumb_3' => 'Bank',
				'breadcrumb_1_url' => base_url . 'admin/dashboard',
				'breadcrumb_2_url' => '#',
				'breadcrumb_3_url' => '#',
			]);
		}

		/**
		* Add Data Color
		*/
		public function create()
		{
			Sesion::cekBelum();

			// Color data
			$data = parent::all();
			$exe = Bank_method::create($data);

			echo json_encode($exe);
		}

		/**
		* Update Data Color
		*/
		public function update()
		{
			Sesion::cekBelum();

			// Color data
			$data = parent::all();
			$exe = Bank_method::update(['id' => $data['id']], $data);

			echo json_encode($exe);
		}

		/**
		* Delete Data Color
		*/
		public function destroy()
		{
			Sesion::cekBelum();

			// Color data
			$exe = Bank_method::delete(['id' => parent::all()['id']]);

			echo json_encode($exe);
		}
	}