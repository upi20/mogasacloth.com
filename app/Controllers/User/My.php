<?php
	
	namespace App\Controllers\User;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use App\Models\User;
	use App\Models\Checkout;
	use App\Models\Cart_detail;

	Class My extends Controller
	{
		/**
		* Load View Account
		*/
		public function account()
		{
			Sesion::cekBelum();

			// User data
			$data = User::on([
				'user_id' => parent::sess('user_id'),
			]);

			view('user/template-1/main-page', [
				'page' => 'user/template-1/page/my-account',
				'title' => 'My Account',
				'records' => $data->fetch_assoc(),
			]);
		}

		/**
		* Load View Password
		*/
		public function password()
		{
			Sesion::cekBelum();

			// Javasciprt password
			$javascript = "$(() =>
			{
				$('#r_new_pass').on('change', e =>
				{
					e.preventDefault()

					if($('#new_pass').val() != '')
					{
						change('new_pass', 'r_new_pass')
					}
				})

				$('#new_pass').on('change', e =>
				{
					e.preventDefault()

					if($('#r_new_pass').val() != '')
					{
						change('new_pass', 'r_new_pass')
					}
				})

				function change(id, id2)
				{
					let pass = $('#' + id).val()
					let rpass = $('#' + id2).val()

					if(pass !== rpass)
					{
						$('#submit').removeClass('hov-btn3')
						$('#submit').attr('disabled', 'disabled')
						swal('Password', 'Your password are not same', 'warning')
					}
					else
					{
						$('#submit').addClass('hov-btn3')
						$('#submit').attr('disabled', false)
					}
				}
			})";

			view('user/template-1/main-page', [
				'page' => 'user/template-1/page/my-password',
				'title' => 'My Password',
				'javascript' => $javascript,
			]);
		}

		/**
		* Load View Cart
		*/
		public function cart()
		{
			Sesion::cekBelum();

			// Cart data
			$cart = new Cart_detail;
			$data = $cart->select('*')
			->leftJoin('cart', 'cart.cart_id', 'cart_detail.card_cart_id')
			->leftJoin('product', 'product.prod_id', 'cart_detail.card_prod_id')
			->leftJoin('size', 'size.size_id', 'cart_detail.cart_size_id')
			->leftJoin('color', 'color.color_id', 'cart_detail.cart_color_id')
			->where('cart.cart_user_id', parent::sess('user_id'))
			->and('cart.cart_status', 1)
			->get();

			// Javascript cart
			$javascript = "

			// TOTAL PRICE AFTER CLICK SHIPPING SERVICE
			let total_price = 0

			// VALUE SHIPPING SERVICE DATA
			let value 		= []

			$(() => 
			{
				$('#destination').select2()
				$('#kecamatan').select2()

				// GET SHIPPING CITY NAME 

				$.ajax({
					method: 'post',
					url: '".base_url."shipping/city',
					data: null,
				})
				.then(data => JSON.parse(data))
				.then(data =>
				{
					$('#destination').html('<option disabled selected>Select destination..</option>')
					console.log(data)

					data = data.rajaongkir

					for(let i = 0;i < data.results.length; i++)
					{
						$('#destination').append('<option value='+data.results[i].city_id+'>'+data.results[i].type+' '+data.results[i].city_name+'</option>')
					}
				})

				$('#destination').on('change', function(){
					$.ajax({
						method: 'post',
						url: '".base_url."shipping/subdistrict',
						data: {
							city: this.value
						},
					})
					.then(data => JSON.parse(data))
					.then(data =>
					{
						$('#kecamatan').html('<option disabled selected>Select destination..</option>')
						console.log(data)

						data = data.rajaongkir

						for(let i = 0;i < data.results.length; i++)
						{
							$('#kecamatan').append('<option value='+data.results[i].subdistrict_id+'>'+data.results[i].subdistrict_name+'</option>')
						}
					})
				})

				// SHIPPING FORM

				$('#shipping-form').submit(e =>
				{
					e.preventDefault()

					let courier = $('#courier').val()
					let destination = $('#kecamatan').val()
					let cart_id = $('#cart_id').val()

					$.ajax({
						method: 'post',
						url: '".base_url."shipping/cost',
						data: {
							to: destination,
							courier: courier,
							cart_id: cart_id,
						},
					})
					.then(data => JSON.parse(data))
					.then(data =>
					{
						data = data.rajaongkir

                        if(data.status.code == 400)
						{
							console.log(data)
						}
						else
						{	
							console.log(data)
    						let provicefrom = data.origin_details.province
    						let proviceto = data.destination_details.province
    						let cityfrom = data.origin_details.city_name
    						let cityto = data.destination_details.city
    						let subdistrict = data.destination_details.subdistrict_name
    						let courier = data.results[0].name
    						let html = ''

    						$('#nama_kecamatan').val(data.destination_details.subdistrict_name)
    
    						for(let i = 0; i < data.results[0].costs.length; i++)
    		            	{
    		            		html +=`
    			            		<tr>
    									<td><input type=radio value='`+data.results[0].costs[i].description+`|`+data.results[0].costs[i].service+`|`+data.results[0].costs[i].cost[0].value+`|`+data.results[0].costs[i].cost[0].etd+`|`+courier+`|`+cityfrom+`|`+provicefrom+`|`+cityto+`|`+proviceto+`' onclick='handleClick(this)' name='value-shipping'></td>
    									<td>`+ data.results[0].costs[i].description +`</td>
    									<td>`+ 
    										new Intl.NumberFormat('id-ID')
    											.format(data.results[0].costs[i].cost[0].value) 
    									+`</td>
    									<td>`+data.results[0].costs[i].cost[0].etd+`</td>
    								</tr>
    		            		`
    		            	}
    
    		            	$('#shipping-detail').css('display', 'block')
    		            	$('#courier-shipping').html(courier)
    		            	$('#from-shipping').html(cityfrom + ' ' + provicefrom)
    		            	$('#destination-shipping').html(subdistrict + ', ' + cityto + ' ' + proviceto)
    		            	$('#courier-shipping').html(courier)
    		            	$('#detail-table-body').html(html)
						}
					})
				})

				// CHECKOUT SUBMIT

				$('#submit-chekout').on('click', e =>
				{
					if(total_price > 0)
					{
						let check = confirm('Apakah alamat sudah sesuai?')

						if(check > 0)
						{
							if($('#address-detail').val() !== '')
							{
								$.ajax({
									method: 'post',
									url: '".base_url."my/checkout-create',
									data: {
										value: value.toString(),
										total_price: $('#total_price').val(),
										address: $('#nama_kecamatan').val() + ', ' + $('#desa').val() + ', ' + $('#alamat').val() + ', ' + $('#kode_pos').val(),
									},
								})
								.then(data => JSON.parse(data))
								.then(data =>
								{
									location.href = '".base_url."my/checkout/list/paid/by?id='+data.checkout_id
								})
							}
							else
							{
								swal('Checkout', 'Alamat kosong', 'warning')
							}
						}
					}
					else
					{
						swal('Checkout', 'Mohon pilih salah satu metode pembayaran', 'warning')
					}
				})
			})

			// HANDLE CLICK RADIO BUTTON

			function handleClick(el)
			{
				value = el.value.split('|')
				total_price = $('#total_price').val()

				total_price = Number(total_price) + Number(value[2])

				$('#total-price-shipping').html(new Intl.NumberFormat('id-ID')
											.format(total_price))
			}";

			view('user/template-1/main-page', [
				'page' => 'user/template-1/page/my-cart',
				'title' => 'My Cart',
				'records' => $data,
				'javascript' => $javascript,
			]);
		}

		/**
		* Load View Checkout List
		*/
		public function checkout()
		{
			Sesion::cekBelum();

			// Checkout list
			$checkout = new Checkout;
			$data = $checkout->select('*, checkout.created_at as trans_date')
			->leftJoin('checkout_shipping', 'checkout.check_id', 'checkout_shipping.checs_check_id')
			->leftJoin('checkout_payment', 'checkout.check_code', 'checkout_payment.checp_check_code')
			->where('check_user_id', parent::sess('user_id'))
			->get();

			view('user/template-1/main-page', [
				'page' => 'user/template-1/page/my-checkout',
				'title' => 'My Checkout',
				'plugin' => 'datatables',
				'records' => $data,
			]);
		}

		/**
		* Load View Wishlist
		*/
		public function wishlist()
		{
			Sesion::cekBelum();

			// asdasd
			// asdasd
		}
	}