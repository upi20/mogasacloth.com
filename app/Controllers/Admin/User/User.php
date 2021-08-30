<?php
	
	namespace App\Controllers\Admin\User;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use App\Models\User as Users;

	Class User extends Controller
	{
		/**
		* Load View Category
		*/
		public function index()
		{
			Sesion::cekBelum();

			if($_SESSION['lev_name'] != 'Administrator')
			{
				redirect(base_url);			
			}

			// Category data
			$data = Users::all();

			// Load view
			view('admin/main-page', [
				'page' => 'user/user-data',
				'title' => 'User',
				'records' => $data,
				'plugin' => 'datatables',
				'navigation' => ['User'],
				'breadcrumb_1' => 'Dashboard',
				'breadcrumb_2' => 'User',
				'breadcrumb_3' => 'Data',
				'breadcrumb_1_url' => base_url . 'admin/dashboard',
				'breadcrumb_2_url' => '#',
				'breadcrumb_3_url' => '#',
			]);
		}

		/**
		* Add Data Category
		*/
		public function create()
		{
			Sesion::cekBelum();

			// Category data
			$data = parent::all();
			$exe = Users::create($data);

			echo json_encode($exe);
		}

		/**
		* Update Data Category
		*/
		public function update()
		{
			Sesion::cekBelum();

			// Category data
			$data = parent::all();
			$exe = Users::update(['user_id' => $data['user_id']], $data);

			echo json_encode($exe);
		}

		/**
		* Delete Data Category
		*/
		public function destroy()
		{
			Sesion::cekBelum();

			// Category data
			$exe = Users::delete(['user_id' => parent::all()['user_id']]);

			echo json_encode($exe);
		}
	}