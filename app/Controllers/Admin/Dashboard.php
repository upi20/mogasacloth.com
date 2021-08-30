<?php
	
	namespace App\Controllers\Admin;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use App\Models\Product;
	use App\Models\Checkout_payment;
	use App\Models\User;


	Class Dashboard extends Controller
	{
		/**
		* Load View Login
		*/
		public function index()
		{
			Sesion::cekBelum();

			if($_SESSION['lev_name'] == 'Administrator')
			{
				view('admin/main-page', [
					'page' => 'home',
					'title' => 'Dashboard',
					'navigation' => ['Dashboard'],
					'breadcrumb_1' => 'Dashboard',
					'breadcrumb_1_url' => '#',
				]);
			}elseif ($_SESSION['lev_name'] == 'Gudang') {
				redirect('manage-stok');
			}else{

				redirect(base_url);			
			}
			
		}

		public function Data()
		{
			// produk
			$produk = new Product;
			$stok = $produk->raw('select sum(prod_stok) as stok from product')
							->get();

			$stok = $stok->fetch_assoc();
			$data['stok'] = $stok['stok'];

			//order
			$order = new Checkout_payment;

			//order masuk
			$masuk = $order->query('select count(checp_id) as masuk from checkout_payment');

			if ($masuk) {

				$masuk = $masuk->fetch_assoc();
				$data['masuk'] = $masuk['masuk'];

			}else{

				$data['masuk'] = 0;

			}

			// order proses
			$proses = $order->query('select count(checp_id) as proses from checkout_payment where checp_status_value = "checked" or checp_status_value = "SETTLEMENT"');

			if ($proses) {

				$proses = $proses->fetch_assoc();
				$data['proses'] = $proses['proses']; 

			}else{

				$data['proses'] = 0;

			}

			//order selsai
			$selesai = $order->query('select count(checp_id) as selesai from checkout_payment where checp_status_value = "Sent"');

			if ($selesai) {

				$selesai = $selesai->fetch_assoc();
				$data['selesai'] = $selesai['selesai'];

			}else{

				$data['selesai'] = 0;

			}

			//user
			$user = new User;

			//get data user
			$user = $user->query('select count(user_id) as user from user');

			if ($user) {
				
				$user = $user->fetch_assoc();
				$data['user'] = $user['user'];

			}else{

				$data['user'] = 0;

			}

			echo json_encode($data);
		}
	}