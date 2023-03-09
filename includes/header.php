
<?php if($_SESSION['id'])
{ ?><div class="brand clearfix" style="background-image:url(img/new.jpg)">
		<a href="#" class="logo" style="font-size:13px; color:white;">HOSTEL MANAGEMENT SYSTEM</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/eric.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix" style="background-color:slategray">
		<a href="#" class="logo" style="font-size:13px;margin-left:12px;">HOSTEL MANAGEMENT SYSTEM</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>