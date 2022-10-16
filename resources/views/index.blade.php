<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toko Elektronik</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

	<div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="#"
              class="list-group-item list-group-item-action active"
            >
              Dashboard
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action"
            >
              My Products
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action"
            >
              Transactions
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action"
            >
              Store Settings
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action"
            >
              My Account
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action"
            >
              Sign Out
            </a>
          </div>
        </div>

        <!-- Page Content  -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Dekstop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                    >
                      <img
                        src="/images/icon-user.png"
                        alt=""
                        class="rounded-circle mr-2 profile-picture"
                      />
                      Hi, Bos
                    </a>
                    <div class="dropdown-menu">
                      <a href="/dashboard.html" class="dropdown-item"
                        >Dashboard</a
                      >
                      <a href="/dashboard-account.html" class="dropdown-item"
                        >Settings</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="/" class="dropdown-item">Logout</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link d-inline-block mt-2">
                      <img src="/images/icon-cart-filled.svg" alt="" />
                      <div class="card-badge">3</div>
                    </a>
                  </li>
                </ul>

                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> Hi, Bos </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block"> Cart </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- Section Content-->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <img src="/public/brg.jpg" class="img-fluid" width="1500" >
				<h2 class="mt-4">Toko Elektronik Acun</h2>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Customer</div>
                        <div class="dashboard-card-subtitle">15,209</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Pendapatan</div>
                        <div class="dashboard-card-subtitle">Rp931.290</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Transaksi</div>
                        <div class="dashboard-card-subtitle">22,409,399</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Data Barang Elektronik</h5>
                    
                  </div>
                </div>
              </div>
            </div>
			<div class="container">
			<a href="/pegawai/tambah" class="btn btn-primary mb-5" >+ Tambah Data Barang</a>

			<table class="table table-striped" align="center" >
			<tr>
				<th>Nama Barang</th>
				<th>Jenis Barang</th>
				<th>Stok</th>
				<th>Pegawai</th>
				<th>Opsi</th>
			</tr>
			@foreach($pegawai as $p)
			<tr>
				<td>{{ $p->pegawai_nama }}</td>
				<td>{{ $p->pegawai_jabatan }}</td>
				<td>{{ $p->pegawai_umur }}</td>
				<td>{{ $p->pegawai_alamat }}</td>
				<td>
					<a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
					|
					<a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
			@endforeach
		</table>

		@if($pegawai->hasPages())
		<div class="card-footer">
			{{ $pegawai->links() }}
		</div>
		@endif
		</div>
          </div>
		  		
</div>
        </div>
      </div>
    </div>

	<!-- Bootstrap core JavaScript -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
  </body>
</html>






	
	