<?php
	
	namespace App\Controllers\Admin\Website;

	use App\Core\Controller;
	use App\Core\Model;
	use App\Liblaries\Sesion;
	use App\Liblaries\Upload;
	use App\Models\Faq as faqs;

	Class Faq extends Controller
	{
		/**
		* Load View FAQ
		*/
		public function index()
		{
			Sesion::cekBelum();

			if($_SESSION['lev_name'] != 'Administrator')
			{
				redirect(base_url);			
			}

			// FAQ data
			$faq = new Faqs; 
			$data = $faq->select('*')
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
				'page' => 'website/faq',
				'title' => 'FAQ',
				'records' => $data,
				'menu' => $menu,
				'plugin' => 'datatables',
				'navigation' => ['Website'],
				'breadcrumb_1' => 'Dashboard',
				'breadcrumb_2' => 'Website',
				'breadcrumb_3' => 'FAQ',
				'breadcrumb_1_url' => base_url . 'admin/dashboard',
				'breadcrumb_2_url' => '#',
				'breadcrumb_3_url' => '#',
			]);
		}

		/**
		* Add Data FAQ
		*/
		public function create()
		{
			Sesion::cekBelum();

			// FAQ data
			$data = parent::post_all();

			// FAQ data save
			$exe = faqs::create($data);

			echo json_encode($exe);
		}

		/**
		* Update Data FAQ
		*/
		public function update()
		{
			Sesion::cekBelum();

			// FAQ data
			$data = parent::post_all();

			// FAQ data save
			$exe = faqs::update(['faq_id' => $data['faq_id']], $data);

			echo json_encode($exe);
		}

		/**
		* Delete Data FAQ
		*/
		public function destroy()
		{
			Sesion::cekBelum();

			// FAQ data
			$exe = faqs::delete(['faq_id' => parent::all()['faq_id']]);
			
			echo json_encode($exe);
		}
	}