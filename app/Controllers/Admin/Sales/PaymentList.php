<?php
	
	namespace App\Controllers\Admin\Sales;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use Mpdf\Mpdf;
	use App\Models\Checkout;
	use App\Models\Cart;
	use App\Models\Cart_detail;
	use App\Models\Product;
	use App\Models\Checkout as Checkouts;
	use App\Models\Checkout_payment;

	Class PaymentList extends Controller
	{
		/**
		* Load View Payment List
		*/
		public function index()
		{
			Sesion::cekBelum();

			if($_SESSION['lev_name'] != 'Administrator')
			{
				redirect(base_url);			
			}
			
			
			//cek expire
			self::cekEkspire(); 

			// Load view
			view('admin/main-page', [
				'page' => 'sales/payment-list',
				'title' => 'Payment List',
				'plugin' => 'datatables',
				'navigation' => ['Sales'],
				'breadcrumb_1' => 'Dashboard',
				'breadcrumb_2' => 'Sales',
				'breadcrumb_3' => 'Payment List',
				'breadcrumb_1_url' => base_url . 'admin/dashboard',
				'breadcrumb_2_url' => '#',
				'breadcrumb_3_url' => '#',
			]);
		}

		/**
		* Update Data Payment List
		*/
		public function update()
		{
			Sesion::cekBelum();

			// Payment List data
			$data = parent::all();

			$no_urut = new Checkouts;
			$no_urut = $no_urut->select('*')
			->where('checkout.check_code', $data['id'])
			->get();

			$no_urut = $no_urut->fetch_assoc();


			$status = ($data['type'] === 'SETTLEMENT') ? 1 : 0;
			
			$exe = Checkout::update(['check_code' => $data['id']], [
				'check_status_value' => $data['type'],
				'check_status_code' => $status,
				'check_invoice' => ($data['type'] === 'SETTLEMENT') ? 'MGS-00'.date('Y').$no_urut['check_id'] : '',
			]);

			$exe2 = Checkout_payment::update(['checp_check_code' => $data['id']], [
				'checp_status_value' => $data['type'],
				'checp_status_code' => $status,
			]);
			
			//checkout data
			$checkout = new Checkouts;
			$checkout = $checkout->select('*')
			->where('checkout.check_code', $data['id'])
			->get();

			$checkout = $checkout->fetch_assoc();

			// Decrase product stok
			$cart_detail = Cart_detail::on([
				'card_cart_id' => $checkout['check_cart_id'],
			]);

			foreach($cart_detail as $cd)
			{
				$prod_id = $cd['card_prod_id'];

				// Get stok product
				$prod_data = Product::on([
					'prod_id' => $prod_id,
				]);
				$prod_data = $prod_data->fetch_assoc();

				Product::update(['prod_id' => $prod_id], [
					'prod_stok' => (int)$prod_data['prod_stok'] - (int)$cd['card_qty'],
				]);
			}

			echo json_encode($exe);
		}

		/**
		* Eksport PDF
		*/
		public function eksportPdf()
		{
			$payment = new Checkout_payment;
			$data = $payment->select('*')
			->leftJoin('checkout', 'checkout.check_code', 'checkout_payment.checp_check_code')
			->leftJoin('user', 'user.user_id', 'checkout.check_user_id')
			->orderBy('checkout.check_status_value','desc')
			->get();


			//data
			$ekport	=  view_html_only('admin/sales/eksport-pdf',[
				'records' => $data,
				'title' => 'Laporan Penjualan',
				'alamat' => 'Perum DBoqis Paniisan, Blok D No.19-22, RT.02/RW.11, Malakasari, Bandung, Jawa Barat 40376',
			]);


			$mpdf = new Mpdf;
			$mpdf->WriteHTML($ekport);
			$mpdf->Output();
		}

		/**
		* Exksport Excel
		*/
		public function eksportExcel()
		{
			$payment = new Checkout_payment;
			$data = $payment->select('*')
			->leftJoin('checkout', 'checkout.check_code', 'checkout_payment.checp_check_code')
			->leftJoin('user', 'user.user_id', 'checkout.check_user_id')
			->orderBy('checkout.check_status_value','desc')
			->get();

			//data
			view('admin/sales/eksport-excel', [
				'records' => $data,
				'unique_id' => str_replace('.','',microtime(true)).rand(000,999),
				'title' => 'Laporan Penjualan',
				'alamat' => 'Perum DBoqis Paniisan, Blok D No.19-22, RT.02/RW.11, Malakasari, Bandung, Jawa Barat 40376', 
			]);
		}

		/**
		* Payment List Data
		*/
		public function getPaymentListData()
		{
			// Where data
			$where = (isset($_POST['where'])) ? parent::post('where') : '';

			// Payment List data
			$payment = new Checkout_payment;
			$data = $payment->select('*')
			->leftJoin('checkout', 'checkout.check_code', 'checkout_payment.checp_check_code')
			->raw(" WHERE checkout.check_status_value LIKE '%{$where}%' ")
			->get();

			$data = Checkout_payment::result_array($data);

			echo json_encode($data);
		}
		
		/**
		* Eksport PDF invoice
		*/
		public function invoice($id)
		{
			//checkout data
			$checkout = new Checkout;
			$checkout1 = $checkout->select('*')
			->leftJoin('checkout_shipping', 'checkout.check_id', 'checkout_shipping.checs_check_id')
			->leftJoin('checkout_payment', 'checkout.check_code', 'checkout_payment.checp_check_code')
			->leftJoin('user', 'checkout.check_user_id', 'user.user_id')
			->where('checkout.check_code', $id)
			->get();

			$checkout = $checkout1->fetch_assoc();

			// Cart data
			$cart = new Cart_detail;
			$cart = $cart->select('*')
			->leftJoin('cart', 'cart.cart_id', 'cart_detail.card_cart_id')
			->leftJoin('product', 'product.prod_id', 'cart_detail.card_prod_id')
			->leftJoin('size', 'size.size_id', 'cart_detail.cart_size_id')
			->leftJoin('color', 'color.color_id', 'cart_detail.cart_color_id')
			->where('cart.cart_id', $checkout['check_cart_id'])
			->and('cart.cart_user_id', parent::sess('user_id'))
			->get();


			//data
			$eksport	=  view_html_only('admin/sales/eksport-pdf',[
				'records' => $checkout1,
				'cart' => $cart,
				'title' => 'Laporan Penjualan',
				'alamat' => 'Perum DBoqis Paniisan, Blok D No.19-22, RT.02/RW.11, Malakasari, Bandung, Jawa Barat 40376',
			]);

			$mpdf = new Mpdf;
			$mpdf->WriteHTML($eksport);
			$mpdf->Output();
		}
		
		/**
		* Eksport PDF invoice
		*/
		public function cekEkspire(){

			//Payment List data
			$data = Checkout_payment::all();
			foreach ($data as $data) {
			
				$timer_start = strtotime($data['created_at']);
				$expireSec = 24*60*60;
				if (time() - $timer_start > $expireSec) {

					// cek paymen data status pandding
					if ($data['checp_fraud_status'] == 'pendding') {
						
						$exe = Checkout::update(['check_code' => $data['checp_check_code']], [
							'check_status_value' => 'Expire',
							'check_status_code' => '0',
						]);

						$exe2 = Checkout_payment::update(['checp_check_code' => $data['checp_check_code']], [
							'checp_status_value' => 'Expire',
							'checp_fraud_status' => 'Expire',
							'checp_status_code' => '0',
						]);;
					}
				}
			}

		}
		
		/**
		* Input No Resi
		*/
		public function Resi(){

			//Data Resi
			$data = parent::post_all();

			// update payment data status Sent
			$exe = Checkout::update(['check_code' => $data['check_code']], [
				'check_status_value' => 'Sent',
				'check_resi' => $data['check_resi'],
			]);

			$exe2 = Checkout_payment::update(['checp_check_code' => $data['check_code']], [
				'checp_status_value' => 'Sent',
			]);

			echo json_encode($exe);
		}
	}