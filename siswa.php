<?php 
	require_once 'koneksi/koneksi.php';
	if (!isset($_SESSION['user_login'])) {
		header("location: login.php");
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Siswa/</title>
 	<link rel="stylesheet" type="text/css" href="css/siswa.css">
 	<link rel="stylesheet" type="text/css" href="css/navbar.css">

 	<script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/siswa.js"></script>
 <body>
 <div class="wrapper">
 	
 	<div class="grid">

 		<?php  
 			require_once('./partials/navbar.inc.php');
 		?>
 		<div class="bg-siswa row">

 			<?php 
 				$query_siswa = $koneksi->query("SELECT * FROM tb_siswa ORDER BY nama_siswa ASC");
 				if ($query_siswa->num_rows > 0) {
 					$no = 1;
 					while ($data_siswa = $query_siswa->fetch_assoc()) {
 						?>
 						<div class="col-lg-3 col-md-4 col-sm-12 main-holder">
				 			<div id="main">
					            <div id="image" class="image<?= $no ?>">
					                <img src="img/siswa/user.png"/>
					                <div id="wave"></div>
					                <div id="wave2"></div>
					            </div>
					            
					            <div id="info" class="info<?= $no ?>">
					                <div id="viewMore" class="viewMore<?= $no ?>">
					                	<a><img  src="img/siswa/View%20More.png" width="70%"/></a></div>
					                <div id="name"><?= $data_siswa['nama_siswa'] ?></div>
					                <div id="status"><?= '" ' . $data_siswa['quotes'] . ' "'?></div>
					                <div id="social">
					                    <img src="img/siswa/Facebook.png"/>
					                    <img src="img/siswa/ig.png"/ width="24px" height="24px" style="margin-top: 10px;">
					                    <img src="img/siswa/Twitter.png"/>
					                </div>
					            </div>

					            <div class="aboutMe aboutMe<?= $no ?>">
					                <h2>ABOUT ME</h2>
					                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loren Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					                <div id="close" class="close<?= $no ?>"><img src="img/siswa/Close.png" width="65%"/></div>
					            </div>
					            
					            
					            
					            
					        </div><!-- main -->
				 		</div><!--col-lg-3 main-holder-->
 						<?php
 						$no++;
 					}
 				}
 				else{
 					echo "Tidak Ada Data";
 				}
 			 ?>

 		</div><!--bg-siswa-->
 	</div><!--grid-->
 </div><!--wrapper-->
 </body>
 </html>

<script type="text/javascript">
	$(document).ready(function(){ 
	var numRows = <?= $query_siswa->num_rows ?>;
	<?php  
		for($i=1;$i<=$query_siswa->num_rows;$i++){
			?>
				$(".viewMore<?= $i ?>").click(function(){
					$(".aboutMe<?= $i ?>").animate({top:"0px"});
				});

				$(".close<?= $i ?>").click(function(){
			        $(".aboutMe<?= $i ?>").animate({top:"-300px"});
    			}); 
			<?php
		}
	?>
	// for(var i=1;i<=numRows;i++){
	// 	var viewMore = ".viewMore" + i;
	// 	var info = ".info" + i;
	// 	var aboutMe = ".aboutMe" + i;
	// 	var image = ".image" + i;
	// 	var project = ".project" + i;
		
	// }
    
    // $(".viewMore").click(function(e){
    //     console.log(e);
    //     // $(".info").animate({top:"460px"}) ;
    //     // $(".aboutMe").animate({top:"0px"});
    //     // $(".image").animate({left:"250px"});
    //     // $(".project").animate({left:"0px"});
    // });
    
    
});
</script>