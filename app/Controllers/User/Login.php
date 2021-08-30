<?php
	
	namespace App\Controllers\User;

	use App\Core\Controller;
	use App\Liblaries\Auth;
	use App\Liblaries\Hash;
	use App\Liblaries\Sesion;
	use App\Liblaries\Email;
	use App\Models\Web_setting;
	use App\Models\User;
	use App\Models\Cart;


	Class Login extends Controller
	{
		/**
		* Load View Login
		*/
		public function index()
		{
			Sesion::cekLogin();

			// Javascript Code For Page
			$javascript = "$('#auth-form').submit(e => 
			{
				e.preventDefault()

				let username = $('#user-email').val()
				let password = $('#user-password').val()

				$.ajax({
					method: 'post',
					url: '".base_url."auth/login_post',
					data: {
						username: username,
						password: password,
					},
				})
				.then(data => JSON.parse(data))
				.then(data =>
				{
					if(data.status > 0)
					{
						swal('Login Berhasil', 'Selamat Berbelanja di Website Kami', 'success')

						if(data.data.lev_name == 'Administrator')
						{
							setInterval(() => { location.href = '".base_url."admin/dashboard' }, 1000)
						}
						else
						{
							let check = localStorage.getItem('id_user');
							if (check != null) {
								$.ajax({
									method: 'post',
									url: '".base_url."auth/update_cart',
									data: {
										id: check,
										user_id: data.user_id,
									},
								}).done((data) => {
									console.log(data)
								})
								
							}
							setInterval(() => { location.href = '".base_url."' }, 1000)
						}
					}
					else
					{
						if(data.message == 'Username tidak ada')
						{
							$('#user-email').val('')
							$('#user-password').val('')
							$('#user-email').focus()
						}
						else
						{

							$('#user-password').val('')
							$('#user-password').focus()
						}

						swal('Wah! Kamu Gagal Masuk', 'Mungkin password/email kamu salah?', 'warning')
					}
				})
			})";

			view('user/template-1/main-page', [
				'page' => 'user/template-1/login',
				'title' => 'Sign In',
				'javascript' => $javascript,
			]);
		}

		/**
		* Login Proses
		*/
		public function auth()
		{
			Sesion::cekLogin();

			// Post data
			$username = parent::post('username');
			$password = parent::post('password');

			// Auth
			Auth::table('user');
			Auth::user_field('user_email');
			Auth::password_field('user_password');
			
			// Execute Auth
			$exe = Auth::login($username, $password);

			echo json_encode($exe);
		}

		/**
		* Login Proses
		*/
		public function update_cart()
		{
			Sesion::cekLogin();

			// Post data
			$id = parent::post('id');
			$user_id = parent::sess('user_id');

			// Cart
			$cart = new Cart;

			
			// Execute Auth
			$exe = Cart::update(['cart_user_id' => $id , 'cart_status' => 1], [
									'cart_user_id' =>$user_id,
								]);

			echo json_encode($exe);
		}

		/**
		* Load View Register
		*/
		public function register()
		{
			Sesion::cekLogin();

			// Javascript Code For Page
			$javascript = "$('#user-repeat-password').on('change', e =>
			{
				e.preventDefault()

				let password = $('#user-password').val()
				let rpassword = $('#user-repeat-password').val()

				if(password !== rpassword)
				{
					swal('Register', 'Password not same', 'warning')

					$('#user-repeat-password').val('')
					$('#user-repeat-password').focus()

					$('#btn-submit').prop('disabled', true)
				}
				else
				{
					$('#btn-submit').prop('disabled', false)
				}
			})";

			view('user/template-1/main-page', [
				'page' => 'user/template-1/register',
				'title' => 'Register',
				'javascript' => $javascript,
			]);
		}

		/**
		* Register Proses
		*/
		public function register_post()
		{
			Sesion::cekLogin();

			// Account data
			$data = parent::post_all();

			// Generate token
			$token = bin2hex(openssl_random_pseudo_bytes(16));

			// Merge data and token
			$data = array_merge($data, [
				'user_token' => $token, 
				'user_lev_id' => 2, 
				'user_password' => Hash::bcrypt_hash($data['user_password']),
			]);

			// Account data save
			$exe = Auth::register($data, [
				'table' => 'user',
			]);

			// Website data
			$website = Web_setting::all();
			$website = $website->fetch_assoc();


			// LINK FOR VERIFICATION EMAIL
			$link = base_url . 'auth/mail/register/verify/value-token/' . $token;

			// HTML ONLY LOAD FOR EMAIL
			$out = view_html_only('email/verify-email', [
				'base_url' => base_url,
				'app_name' => $website['web_name'],
				'token' => $token,
				'username' => $data['user_name'],
				'link' => $link,
			]);


			// Send email
			Email::host('ssl://smtp.gmail.com');
			Email::username('adjieabdulazis42@gmail.com');
			Email::password('adjie2019');
			Email::from(['adjieabdulazis42@gmail.com', $website['web_name']]);
			Email::to([$data['user_email'], 'Your Account Verification']);
			Email::subject('Your Account Verification');
			Email::body($out);
			Email::send();

			redirect(base_url . 'auth/after_register');
		}

		/**
		* After Register Proses
		*/
		public function after_register()
		{
			Sesion::cekLogin();

			view('user/template-1/main-page', [
				'page' => 'user/template-1/after_register',
				'title' => 'Verify Your Account'
			]);
		}

		/**
		* Verify Email Account
		*/
		public function register_verify($token)
		{
			// Find user by token
			$exe = User::update(['user_token' => $token], [
				'verified_email' => 1,
			]);

			alert('Account has been verified');
			
			redirect(base_url . 'auth');
		}

		/**
		* Load View Forgot Password
		*/
		public function forgot_password()
		{
			Sesion::cekLogin();

			view('user/template-1/main-page', [
				'page' => 'user/template-1/forgot-password',
				'title' => 'Forgot Password',
			]);
		}

		/**
		* Send Link Change Email
		*/
		public function send_email_forgot_password()
		{
			Sesion::cekLogin();

			// Email user
			$email = parent::post('email');

			// Check user email
			$chek = User::on([
				'user_email' => $email,
			]);

			if($chek->num_rows > 0)
			{
				// User data
				$chek_assoc = $chek->fetch_assoc();

				// Generate token
				$token = bin2hex(openssl_random_pseudo_bytes(16));

				// Update user token
				User::update(['user_email' => $email], [
					'user_token' => $token,
				]);

				// Website data
				$website = Web_setting::all();
				$website = $website->fetch_assoc();

				// LINK FOR CHANGE PASSWORD
				$link = base_url . 'auth/forgot_password/change/value-token/' . $token;

				// HTML ONLY LOAD FOR EMAIL
				$out = view_html_only('email/forgot-password', [
					'base_url' => base_url,
					'app_name' => $website['web_name'],
					'token' => $token,
					'username' => $chek_assoc['user_name'],
					'link' => $link,
				]);


				// Send email
				Email::host('ssl://smtp.gmail.com');
				Email::username('adjieabdulazis42@gmail.com');
				Email::password('adjie2019');
				Email::from(['adjieabdulazis42@gmail.com', $website['web_name']]);
				Email::to([$email, 'Link To Change Your Password']);
				Email::subject('Forgot Password');
				Email::body($out);
				Email::send();

				alert('Check your email ');

				redirect(base_url . 'auth');
			}
			else
			{
				alert('Email is not registered ! ');

				redirect_back();
			}
		}

		/**
		* Load View Change Password
		*/
		public function forgot_change_password($token)
		{
			Sesion::cekLogin();

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
				'page' => 'user/template-1/new-password',
				'title' => 'Change Password',
				'token' => $token,
				'javascript' => $javascript,
			]);
		}

		/**
		* Change Password
		*/
		public function forgot_change_password_post()
		{
			Sesion::cekLogin();

			// Account new data
			$token = parent::post('token');
			$new_pass = parent::post('new_pass');

			// Change account password
			User::update(['user_token' => $token], [
				'user_password' => Hash::bcrypt_hash($new_pass),
			]);

			alert('Change password success !');

			redirect(base_url . 'auth');
		}

		/**
		* Kirim Kode Lupa Password
		*/
		public function lupa_password()
		{
			Sesion::cekLogin();

			// Email data
			$data = parent::post_all();

			// Generate token
			$token = bin2hex(openssl_random_pseudo_bytes(16));

			// Update token
			$exe = User::update(['user_token' => $token]);

			// LINK FOR VERIFICATION EMAIL
			$link = base_url . 'auth/mail/lupa-password/verify/value-token/' . $token;

			// HTML ONLY LOAD FOR EMAIL
			$out = view_html_only('email/verify-email', [
				'base_url' => base_url,
				'app_name' => $website['web_name'],
				'token' => $token,
				'username' => $data['user_name'],
				'link' => $link,
			]);



			// Website data
			$website = Web_setting::all();
			$website = $website->fetch_assoc();


			// Send email
			Email::host('zonaseller.sudamiskin.com');
			Email::username('test@zonaseller.sudamiskin.com');
			Email::password('@Cimahi123');
			Email::from(['test@zonaseller.sudamiskin.com', $website['web_name']]);
			Email::to([$data['user_email'], 'Ubah Password']);
			Email::subject('Ubah Password');
			Email::body($out);
			Email::send();

			redirect(base_url . 'auth/after_register');
		}



		/**
		* Verify Kode
		*/
		public function lupa_password_verify($token)
		{
			// Find user by token
			$exe = User::update(['user_token' => $token]);

			alert('Account has been verified');
			
			redirect(base_url . 'auth');
		}

		/**
		* Logout Proses
		*/
		public function logout()
		{
			Sesion::cekLogin();

			Auth::logout();

			redirect(base_url);
		}
	}