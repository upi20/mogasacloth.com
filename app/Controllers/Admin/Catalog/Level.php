<?php
	
	namespace App\Controllers\Admin\Catalog;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use App\Models\Varian;

	Class Level extends Controller
	{
		/**
		* Load View Color
		*/
		public function index()
		{
			Sesion::cekBelum();

			// Color data
			$data = Varian::all();

			// Load view
			view('admin/main-page', [
				'page' => 'catalog/level',
				'title' => 'Level',
				'records' => $data,
				'plugin' => 'datatables',
				'navigation' => ['Catalog'],
				'breadcrumb_1' => 'Dashboard',
				'breadcrumb_2' => 'Catalog',
				'breadcrumb_3' => 'level',
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
			$exe = Varian::create($data);

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
			$exe = Varian::update(['vari_id' => $data['vari_id']], $data);

			echo json_encode($exe);
		}

		/**
		* Delete Data Color
		*/
		public function destroy()
		{
			Sesion::cekBelum();

			// Color data
			$exe = Varian::delete(['vari_id' => parent::all()['vari_id']]);

			echo json_encode($exe);
		}
	}