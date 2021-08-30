<?php
	
	namespace App\Controllers\Admin\Website;

	use App\Core\Controller;
	use App\Core\Model;
	use App\Liblaries\Sesion;
	use App\Liblaries\Upload;
	use App\Models\Blog as Blogs;
	use App\Models\Category;

	Class Blog extends Controller
	{
		/**
		* Load View Blog
		*/
		public function index()
		{
			Sesion::cekBelum();

			if($_SESSION['lev_name'] != 'Administrator')
			{
				redirect(base_url);			
			}

			// Blog data
			$blog = new Blogs; 
			$data = $blog->select('*')
			->leftJoin('category', 'category.cate_id', 'blog.blog_cate_id')
			->leftJoin('user', 'user.user_id', 'blog.bolg_user_id')
			->get();

			// Category
			$category = Category::all(); 

			// Load view
			view('admin/main-page', [
				'page' => 'website/blog',
				'title' => 'Blog',
				'records' => $data,
				'category' => $category,
				'plugin' => 'datatables',
				'navigation' => ['Website'],
				'breadcrumb_1' => 'Dashboard',
				'breadcrumb_2' => 'Website',
				'breadcrumb_3' => 'Blog',
				'breadcrumb_1_url' => base_url . 'admin/dashboard',
				'breadcrumb_2_url' => '#',
				'breadcrumb_3_url' => '#',
			]);
		}

		/**
		* Add Data Blog
		*/
		public function create()
		{
			Sesion::cekBelum();

			// Blog data
			$data = parent::post_all();
			$data = array_merge($data, ['bolg_user_id' => parent::sess('user_id')]);
			
			// Image
			if(isset($_FILES['image']))
			{
				$data = array_merge($data, ['blog_thumbnal' => Upload::execute('image', ['folder' => 'website/blog/', 'max_size' => 5000000000])]);
			}

			// Blog data save
			$exe = Blogs::create($data);

			echo json_encode($exe);
		}

		/**
		* Update Data Blog
		*/
		public function update()
		{
			Sesion::cekBelum();

			// Blog data
			$data = parent::post_all();
			$data = array_merge($data, ['bolg_user_id' => parent::sess('user_id')]);

			// Image
			if(isset($_FILES['image']))
			{
				$data = array_merge($data, ['blog_thumbnal' => Upload::execute('image', ['folder' => 'website/blog/', 'max_size' => 5000000000])]);
			}

			// Blog data save
			$exe = Blogs::update(['blog_id' => $data['blog_id']], $data);

			echo json_encode($exe);
		}

		/**
		* Delete Data Blog
		*/
		public function destroy()
		{
			Sesion::cekBelum();

			// Blog data
			$exe = Blogs::delete(['blog_id' => parent::all()['blog_id']]);
			
			echo json_encode($exe);
		}
	}