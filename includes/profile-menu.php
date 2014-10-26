<ul class="nav nav-pills nav-stacked">
<!-- <li <?php //(isset($menu) && $menu == 'profile') ? "class='active'" : "" ?> ><a href="http://localhost/trashkan/profile.php"> <i class="icon-user"></i> Profile</a></li> -->
	<li <?=(isset($menu) && $menu == 'recent') ? "class='active'" : "" ?>><a href="http://localhost/trashkan/profile.php"> <i class="icon-calendar"></i> Recent Activity </a></li>
	<li <?=(isset($menu) && $menu == 'edit') ? "class='active'" : "" ?>><a href="http://localhost/trashkan/profile-edit.php"> <i class="icon-edit"></i> Edit profile</a></li>
</ul>