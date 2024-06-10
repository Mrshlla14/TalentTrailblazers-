<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>@Aplications</title>
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
		   <a href="../Transaction/aplications.php">
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
		<h3>Aplications</h3>
		<button type="button" class="btn btn-tambah">
		   <a href="aplications-entry.php">Add Data</a>
		</button>
		<table class="table-data">
		   <thead>
			<tr>
			  <th style="width: 20%">Nama</th>
			  <th>Kategori</th>
			  <th style="width: 20%">Tanggal Pendaftaran</th>
			  <th style="width: 20%">Biaya</th>
			  <th>Action</th>
			</tr>
		   </thead>
		   <tbody>
			<tr>
			   <td>Marshella</td>
			   <td>Seni-Tari</td>
			   <td>35000</td>
			   <td>14-03-2024</td>
			   <td><a href="">Edit</a> | <a href="">Hapus</a></td>
			</tr>
		   </tbody>
		   <tr>
			  <td>Fanya</td>
			  <td>Seni-Lukisan</td>
			  <td>50000</td>
			  <td>30-03-2024</td>
			  <td><a href="">Edit</a> | <a href="">Hapus</a></td>
		   </tr>
		</table>
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
