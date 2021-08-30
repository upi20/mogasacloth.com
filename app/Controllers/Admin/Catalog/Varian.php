<?php
	
	namespace App\Controllers\Admin\Catalog;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use App\Models\Varian;

	Class Color extends Controller
	{
		/**
		* Load View Color
		*/
		public function index()
		{
			Sesion::cekBelum();

			// Color data
			$data = Colors::all();

			if($_SESSION['lev_name'] != 'Administrator')
			{
				redirect(base_url);			
			}

			// Load view
			view('admin/main-page', [
				'page' => 'catalog/color',
				'title' => 'Color',
				'records' => $data,
				'plugin' => 'datatables',
				'navigation' => ['Catalog'],
				'breadcrumb_1' => 'Dashboard',
				'breadcrumb_2' => 'Catalog',
				'breadcrumb_3' => 'Color',
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
			$exe = Colors::create($data);

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
			$exe = Colors::update(['vari_id' => $data['vari_id']], $data);

			echo json_encode($exe);
		}

		/**
		* Delete Data Color
		*/
		public function destroy()
		{
			Sesion::cekBelum();

			// Color data
			$exe = Colors::delete(['vari_id' => parent::all()['vari_id']]);

			echo json_encode($exe);
		}
	}