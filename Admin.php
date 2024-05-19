<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="icon/.png" />
	<link rel="stylesheet" href="css/admin.css" />
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>@Home</title>
</head>

<body>
	<div class="sidebar">
		<div class="logo-details">
			<img src="assets/13.png" alt="" width="200" height="auto" />
		</div>
		<ul class="nav-links">
			<li>
				<a href="#" class="active">
					<i class="bx bx-grid-alt"></i>
					<span class="links_name">Home</span>
				</a>
			</li>
			<li>
				<a href="categories/categories.html">
					<i class="bx bx-box"></i>
					<span class="links_name">Category</span>
				</a>
			</li>
			<li>
				<a href="transaction/aplications.html">
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
			<h1>HAI TEMAN - TEMAN!!</h1>
			<h3>Selamat datang di TalentTrailblazers, tempat dimana bakat-bakat terbaik dari seluruh daerah berkumpul! Temukan,
				eksplor, dan bagikan bakat Anda di platform kami. Apakah Anda seorang seniman, atlet, programmer, atau
				memiliki bakat unik lainnya, TalentTrailblazers adalah tempat yang tepat untuk Anda.</h3>
				
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