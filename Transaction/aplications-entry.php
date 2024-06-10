<!DOCTYPE html>
<html lang="en">	
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>@Aplications Entry</title>
</head>
<body>
   <div class="sidebar">
	<div class="logo-details">
	<img src="assets2/13.png" alt="" width="200" height="auto" /> 
	</div>
	<ul class="nav-links">
	   <li>
		<a href="../admin.php" class="active">
		   <i class="bx bx-grid-alt"></i>
		   <span class="links_name">Home</span>
		</a>
	   </li>
	   <li>
		<a href="../category.php" class="active">
		   <i class="bx bx-box"></i>
		   <span class="links_name">Category</span>
		</a>
	   </li>
	   <li>
		<a href="../transaction/aplications.php">
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">Aplications</span>
		</a>
	   </li>
	   <li>
		<a href="#">
		   <i class="bx bx-log-out"></i>
		   <span class="links_name">Log out</span>
		</a>
	   </li>
	</ul>
   </div>
   <section class="home-section">
	<nav>
	   <div class="sidebar-button">
		<i class="bx bx-menu sidebarBtn"></i>
	   </div>
	   <div class="profile-details">
		<span class="admin_name">Admin</span>
	   </div>
	</nav>
	<div class="home-content">
	   <h3>Input Data</h3>
	   <div class="form-login">
		<form action="">
		   <label for="nama">Nama</label>
		   <input class="input" type="text" name="Nama"
				id="nama" placeholder="Nama" />
		   <label for="jenis">Kategori</label>
		   <input class="input" type="text" name="Kategori"
				id="jenis" placeholder="Jenis" />
		   <label for="harga">Tanggal Pendaftaran</label>
		   <input class="input" type="text" name="Tanggal Pendaftaran"
				id="harga" placeholder="Biaya" />
		   <label for="tgl">Biaya</label>
		   <input class="input" type="date" name="Biaya"
				id="tgl" style="margin-bottom: 20px" />
		   <button type="submit" class="btn btn-simpan" 
                        name="Simpan">
			      Simpan
		   </button>
		</form>
	   </div>
	</div>
   </section>
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	sidebarBtn.onclick = function () {
		sidebar.classList.toggle("active");
	 	  if (sidebar.classList.contains("active")) {
			sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
		  } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};
   </script>
</body>
</html>
