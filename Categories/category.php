<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="assets/.png" />
	<link rel="stylesheet" href="../css/admin.css" />
	<!-- Boxicons CDN Link -->
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>@Category</title>
</head>

<body>
	<div class="sidebar">
		<div class="logo-details">
			<img src="assets1/13.png" alt="" width="200" height="auto" />
		</div>
		<ul class="nav-links">
			<li>
				<a href="../admin.html" class="active">
					<i class="bx bx-grid-alt"></i>
					<span class="links_name">Home</span>
				</a>
			</li>
			<li>
				<a href="../categories.html" class="active">
					<i class="bx bx-box"></i>
					<span class="links_name">Category</span>
				</a>
			</li>
			<li>
				<a href="../transaction/aplications.html">
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
			<h1>TALENT CATEGORY</h1>
			<h2>Selamat datang di halaman Kategori Bakat kami! Di sini, Anda dapat menemukan berbagai jenis bakat dari
				individu-individu di seluruh daerah. Mulai dari seni, olahraga, teknologi, kerajinan, hingga bakat unik lainnya. Berikut ada beberapa kategori bakat yang tersedia : </h2>
			   <h3>1. Seni</h3>
			        <h4>a. Lukisan</h4>
			        <h4>b. Musik</h4>
			        <h4>c. Tari</h4>
			        <h4>d. Teater</h4>
				<h3>2. Olahraga</h3>
					<h4>a. Sepak Bola</h4>
					<h4>b. Volly</h4>
					<h4>c. Renang</h4>
					<h4>d. Tinju</h4>	
				<h3>3. Teknologi</h3>
					<h4>a. Pemograman</h4>
					<h4>b. Desain Grafis</h4>
					<h4>c. Robotik</h4>
				<h3>4. Kerajinan</h3>
					<h4>a. Menganyam</h4>
					<h4>b. Menjahit</h4>
					<h4>c. Memahat</h4>
					<h4>d. Menyulam</h4>
				<h3>5. Bakat Unik</h3>
					<h4>a. Sulap</h4>
					<h4>b. Akrobat</h4>
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