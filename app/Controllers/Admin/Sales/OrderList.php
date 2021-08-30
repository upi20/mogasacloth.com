<?php
	
	namespace App\Controllers\Admin\Sales;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use App\Models\Checkout;
	use Mpdf\Mpdf;

	Class OrderList extends Controller
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

			// Payment Method data
			$order = new Checkout;
			$data = $order->select('*')
			->leftJoin('user', 'user.user_id', 'checkout.check_user_id')
			->where('check_status_value','Sent')
			->get();

			// Load view
			view('admin/main-page', [
				'page' => 'sales/order-list',
				'title' => 'Orders',
				'records' => $data,
				'plugin' => 'datatables',
				'navigation' => ['Sales'],
				'breadcrumb_1' => 'Dashboard',
				'breadcrumb_2' => 'Sales',
				'breadcrumb_3' => 'Orders',
				'breadcrumb_1_url' => base_url . 'admin/dashboard',
				'breadcrumb_2_url' => '#',
				'breadcrumb_3_url' => '#',
			]);
		}
		/**
		* Eksport PDF
		*/
		public function eksportPdf()
		{
			$order = new Checkout;


      
            $dari = $_POST['dari'];
            $sampai = $_POST['sampai'];
            if ($dari == '' && $sampai != '') {
                $data = $order->select('*')
                    ->leftJoin('user', 'user.user_id', 'checkout.check_user_id')
					->where('check_status_value','Sent')
                    ->where("checkout.checp_transaction_time <=", $sampai. ' 23:59:00')
                    ->get();
            }

            else if ($dari != '' && $sampai == '') {
                $data = $order->select('*')
                    ->leftJoin('user', 'user.user_id', 'checkout.check_user_id')
					->where('check_status_value','Sent')
                    ->where("checkout.checp_transaction_time >=", $dari . ' 00:00:00')
                    ->get();
            }

            else if ($dari != '' && $sampai != '') {
                $data = $order->select('*')
                    ->leftJoin('user', 'user.user_id', 'checkout.check_user_id')
					->where('check_status_value','Sent')
                    ->where("checkout.checp_transaction_time >=", $dari. ' 00:00:00')
                    ->where("heckout.checp_transaction_time <=", $sampai. ' 23:59:00')
                    ->get();
            }

			//data
			$ekport	=  view_html_only('admin/sales/eksport-order-pdf',[
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
			$order = new Checkout;
			$data = $order->select('*')
			->leftJoin('user', 'user.user_id', 'checkout.check_user_id')
			->where('check_status_value','SETTLEMENT')
			->get();

			//data
			view('admin/sales/eksport-order-excel', [
				'records' => $data,
				'unique_id' => str_replace('.','',microtime(true)).rand(000,999),
				'title' => 'Laporan Penjualan',
				'alamat' => 'Perum DBoqis Paniisan, Blok D No.19-22, RT.02/RW.11, Malakasari, Bandung, Jawa Barat 40376', 
			]);
		}


	}