<?php
	
	namespace App\Controllers\Admin\Website;

	use App\Core\Controller;
	use App\Core\Model;
	use App\Liblaries\Sesion;
	use App\Liblaries\Upload;
	use App\Models\Tutorial as Tutorials;

	Class Tutorial extends Controller
	{
		/**
		* Load View Tutorial
		*/
		public function index()
		{
			Sesion::cekBelum();

			if($_SESSION['lev_name'] != 'Administrator')
			{
				redirect(base_url);			
			}

			// Tutorial data
			$tutorial = new Tutorials; 
			$data = $tutorial->select('*')
			->get();

			// Parent Menu List
			$model = new Model;
			$menu = $model->select('*')
			->from('menu a')
			->leftJoin('role_menu b', 'a.menu_id', 'b.role_menu_id')
			->leftJoin('level c', 'b.role_lev_id', 'c.lev_id')
			->where('c.lev_name', 'Customer')
			->get();

			// Load view
			view('admin/main-page', [
				'page' => 'website/tutorial',
				'title' => 'Tutorial',
				'records' => $data,
				'menu' => $menu,
				'plugin' => 'datatables',
				'navigation' => ['Website'],
				'breadcrumb_1' => 'Dashboard',
				'breadcrumb_2' => 'Website',
				'breadcrumb_3' => 'Tutorial',
				'breadcrumb_1_url' => base_url . 'admin/dashboard',
				'breadcrumb_2_url' => '#',
				'breadcrumb_3_url' => '#',
			]);
		}

		/**
		* Add Data Tutorial
		*/
		public function create()
		{
			Sesion::cekBelum();

			// Tutorial data
			$data = parent::post_all();

			// Tutorial data save
			$exe = Tutorials::create($data);

			echo json_encode($exe);
		}

		/**
		* Update Data Tutorial
		*/
		public function update()
		{
			Sesion::cekBelum();

			// Tutorial data
			$data = parent::post_all();

			// Tutorial data save
			$exe = Tutorials::update(['tutr_id' => $data['tutr_id']], $data);

			echo json_encode($exe);
		}

		/**
		* Delete Data Tutorial
		*/
		public function destroy()
		{
			Sesion::cekBelum();

			// Tutorial data
			$exe = Tutorials::delete(['tutr_id' => parent::all()['tutr_id']]);
			
			echo json_encode($exe);
		}
	}