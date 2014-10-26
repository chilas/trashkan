<ul class="nav nav-pills nav-stacked">
	<li <?=(isset($menu) && $menu == 'recent') ? "class='active'" : "" ?>><a href="http://localhost/trashkan/company-profile.php"> <i class="icon-calendar"></i> Recent Activities </a></li>
	<li <?=(isset($menu) && $menu == 'trends') ? "class='active'" : "" ?> ><a href="http://localhost/trashkan/company-trends.php"> <i class="icon-bolt"></i> Trends</a></li>
	<li <?=(isset($menu) && $menu == 'edit') ? "class='active'" : "" ?>><a href="http://localhost/trashkan/company-profile-edit.php"> <i class="icon-edit"></i> Edit profile</a></li>
</ul>