
<!--begin::Aside-->
<div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">

	<!--begin::Brand-->
	<div class="brand flex-column-auto " id="kt_brand">

		<!--begin::Logo-->
		<a href="index.html" class="brand-logo">
			<img width="80px" alt="Logo" src="{{ asset('logo.png') }}" />
        </a>

		<!--end::Logo-->

		<!--begin::Toggle-->
		<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
			<span class="svg-icon svg-icon svg-icon-xl">

				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
						<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
					</g>
				</svg>

				<!--end::Svg Icon-->
			</span> </button>

		<!--end::Toolbar-->
	</div>

	<!--end::Brand-->

	<!--begin::Aside Menu-->
	<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

		<!--begin::Menu Container-->
		<div id="kt_aside_menu" class="aside-menu my-4 " data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
			<!--begin::Menu Nav-->
			<ul class="menu-nav ">
				<li class="menu-item  menu-item-active" aria-haspopup="true"><a href="index.html" class="menu-link "><i class="menu-icon flaticon2-poll-symbol"></i><span class="menu-text">Dashboard</span></a></li>
				<li class="menu-section ">
					<h4 class="menu-text">MAIN MENU</h4>
					<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
				</li>
				<li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon2-checking"></i><span class="menu-text">Laporan</span><i class="menu-arrow"></i></a>
					<div class="menu-submenu "><i class="menu-arrow"></i>
						<ul class="menu-subnav">
							<li class="menu-item  menu-item-parent" aria-haspopup="true"><span class="menu-link"><span class="menu-text">Applications</span></span></li>
							<li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;" class="menu-link menu-toggle"><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Penjualan</span><span class="menu-label"><span class="label label-rounded label-primary">6</span></span><i class="menu-arrow"></i></a>
								<div class="menu-submenu "><i class="menu-arrow"></i>
									<ul class="menu-subnav">
                                        <li class="menu-item " aria-haspopup="true"><a href="custom/apps/user/list-default.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Semua Laporan</span></a></li>
										<li class="menu-item " aria-haspopup="true"><a href="custom/apps/user/list-default.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Penjualan Harian</span></a></li>
										<li class="menu-item " aria-haspopup="true"><a href="custom/apps/user/list-datatable.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Penjualan Bulanan</span></a></li>
										<li class="menu-item " aria-haspopup="true"><a href="custom/apps/user/list-columns-1.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Penjualan Produk</span></a></li>
										<li class="menu-item " aria-haspopup="true"><a href="custom/apps/user/list-columns-2.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Penjualan Varian</span></a></li>
										<li class="menu-item " aria-haspopup="true"><a href="custom/apps/user/add-user.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Penjualan Kategori</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Laporan Refund</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Laporan Void</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Laporan Poin</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Laporan Promo</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Laporan Pajak</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Laporan Jenis Bayar</span></a></li>
                                        <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Laporan Kas Kasir</span></a></li>
                                    </ul>
								</div>
							</li>
							
						</ul>
					</div>
				</li>
				<li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon2-line-chart"></i><span class="menu-text">Analisa Laporan</span><i class="menu-arrow"></i></a>
					<div class="menu-submenu "><i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Kinerja kasir</span><span class="menu-label"><span class="label label-danger label-inline">new</span></span></a></li>
                            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Kinerja kasir</span><span class="menu-label"><span class="label label-danger label-inline">new</span></span></a></li>
                            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Kinerja kasir</span><span class="menu-label"><span class="label label-danger label-inline">new</span></span></a></li>
                        </ul>
					</div>
				</li>
				<li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon2-supermarket"></i><span class="menu-text">Produk</span><i class="menu-arrow"></i></a>
					<div class="menu-submenu "><i class="menu-arrow"></i>
						<ul class="menu-subnav">
							<li class="menu-item  menu-item-parent" aria-haspopup="true"><span class="menu-link"><span class="menu-text">Produk</span></span></li>
							<li class="menu-item " aria-haspopup="true"><a href="{{ route("dashboard.product.kategori") }}" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Daftar Kategori</span></a></li>
							<li class="menu-item " aria-haspopup="true"><a href="{{ route('dashboard.product.item') }}" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Daftar Produk</span></a></li>
							<li class="menu-item " aria-haspopup="true"><a href="layout/themes/header-dark.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Daftar Varian</span></a></li>
						</ul>
					</div>
				</li>
                <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon2-percentage"></i><span class="menu-text">Promo</span><i class="menu-arrow"></i></a>
					<div class="menu-submenu "><i class="menu-arrow"></i>
						<ul class="menu-subnav">
							<li class="menu-item  menu-item-parent" aria-haspopup="true"><span class="menu-link"><span class="menu-text">Promo</span></span></li>
							<li class="menu-item " aria-haspopup="true"><a href="{{route('dashboard.promo.kupon.show')}}" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Daftar Kupon</span></a></li>
							<li class="menu-item " aria-haspopup="true"><a href="layout/themes/header-dark.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Poin Reward</span></a></li>
						</ul>
					</div>
				</li>
                <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon2-user"></i><span class="menu-text">Pelanggan</span><i class="menu-arrow"></i></a>
					<div class="menu-submenu "><i class="menu-arrow"></i>
						<ul class="menu-subnav">
							<li class="menu-item  menu-item-parent" aria-haspopup="true"><span class="menu-link"><span class="menu-text">Pelanggan</span></span></li>
							<li class="menu-item " aria-haspopup="true"><a href="{{ route('dashboard.pelanggan.show') }}" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Daftar Pelanggan</span></a></li>
							<li class="menu-item " aria-haspopup="true"><a href="layout/themes/header-dark.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Poin Pelanggan</span></a></li>
						</ul>
					</div>
				</li>
		
				<li class="menu-section ">
					<h4 class="menu-text">Pengaturan & Akun</h4>
					<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
				</li>
                <li class="menu-item" aria-haspopup="true"><a href="{{ route('dashboardkariawan.index') }}" class="menu-link "><i class="menu-icon flaticon-users-1"></i><span class="menu-text">Daftar Karyawan</span></a></li>

                <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon2-settings"></i><span class="menu-text">Pengaturan</span><i class="menu-arrow"></i></a>
					<div class="menu-submenu "><i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Struk</span></a></li>
                            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Satuan Barang</span></a></li>
                            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Pembayaran Non Tunai</span></a></li>
                        </ul>
					</div>
				</li>
                <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover"><a href="javascript:;" class="menu-link menu-toggle"><i class="menu-icon flaticon2-menu-2"></i><span class="menu-text">Atur Jenis Order</span><i class="menu-arrow"></i></a>
					<div class="menu-submenu "><i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Daftar Jenis Order</span></a></li>
                            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/inbox.html" class="menu-link "><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Daftar Meja</span></a></li>
                        </ul>
					</div>
				</li>
                <li class="menu-item " aria-haspopup="true"><a target="_blank" href="https://preview.keenthemes.com/metronic/demo1/builder.html" class="menu-link "><i class="menu-icon flaticon-profile-1"></i><span class="menu-text">Akun Saya</span></a></li>
                <li class="menu-item " aria-haspopup="true"><a target="_blank" href="https://preview.keenthemes.com/metronic/demo1/builder.html" class="menu-link "><i class="menu-icon flaticon-logout"></i><span class="menu-text">Keluar</span></a></li>
			</ul>

			<!--end::Menu Nav-->
		</div>

		<!--end::Menu Container-->
	</div>

	<!--end::Aside Menu-->
</div>

<!--end::Aside-->