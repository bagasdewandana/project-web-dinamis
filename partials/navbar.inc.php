<div class="grid">
	<div class="bg-header row">
		<div class="col-lg-12">
			

			<div id="MenuIcon">
				<div id="MenuLine"></div>
				<div id="MenuLine1"></div>
				<div id="MenuLine2"></div>
			</div>

			<div id="MainMenu">
				<div id="logo">
					<img src="img/3.png" width="75px" height="75px">
				</div>
				<ul>
					<li>Beranda<div class="line"></div></li>
					<li>Siswa<div class="line"></div></li>
					<li>Jadwal<div class="line"></div></li>
					<li>Tugas<div class="line"></div></li>
					<li>Uang Kas<div class="line"></div></li>
					<li>Login<div class="line"></div></li>
				</ul>
				<div id="close">
					<i class="fa fa-times"></i>
				</div>
			</div>

			<div class="bg-menu">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-lg-4 col-md-5">
						<ul class="menu-kiri">
							<li><a href="#">Beranda</a><div class="garis"></div></li>
							<li><a href="siswa.php">Siswa</a><div class="garis"></div></li>
							<li><a href="uangkas.php">Uang Kas</a><div class="garis"></div></li>
						</ul>
					</div> <!-- /col-4 -->
					<div class="col-lg-4 col-md-2">
						<div class="menu-tengah">
							<p align="center"><div class="top-logo"></div></p>
						</div>	
					</div> <!-- /col-4 -->
					<div class="col-lg-4 col-md-5">
						<ul class="menu-kanan">
							<?php
								if (isset($_SESSION['user_login'])) {
									?>
									<li><a href="logout.php">Log Out</a><div class="garis"></div></li>
									<li><a href="member/index.php"><?= $_SESSION['user_login']['username'] ?></a><div class="garis"></div></li>
									<li><a href="#">Tugas</a><div class="garis"></div></li>
									<?php
								}
								else{
									?>
									<li><a href="login.php">Login</a><div class="garis"></div></li>
									<li><a href="#">Jadwal</a><div class="garis"></div></li>
									<li><a href="#">Tugas</a><div class="garis"></div></li>
									<?php
								}
							 ?>
							
						</ul>
					</div> <!-- /col-4 -->
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
      $(document).ready(function(){
        $bg_menu_li = $('.menu-kiri li a, .menu-kanan li a');
        $menu_line = $('#MenuLine, #MenuLine1, #MenuLine2');
        $menu_line.css({'background-color': 'black'});
        $bg_menu_li.css({'color':'black'});
      });
      $(window).scroll(function(){
        $bg_menu = $('.bg-menu');
        $wScroll = $(window).scrollTop();
        $menu_height = $bg_menu.outerHeight();
        $bg_menu_li = $('.menu-kiri li a, .menu-kanan li a');
        $top_logo = $('.top-logo');
        $garis = $('.garis');
        $menu_line = $('#MenuLine, #MenuLine1, #MenuLine2');
        if ($wScroll>$menu_height) {
          $bg_menu_li.css({'color':'white'});
          $garis.css({'background': 'white'});
          $menu_line.css({'background-color': 'white'});
          $bg_menu.css({'background':'#E2B512'});
          $top_logo.css({'background-image':"url(img/3.png)"});
        }
        else{
          $bg_menu_li.css({'color':'#000'});
          $garis.css({'background': '#000'});
          $menu_line.css({'background-color': 'black'});
          $bg_menu.css({'background':'transparent'});
          $top_logo.css({'background-image':"url(img/31.png)"});
        }
      });
    </script>