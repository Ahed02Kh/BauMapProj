<?php include("header.php"); ?>


		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Team</h1>
				<span>Professional Team</span>
			</div>

		</section><!-- #page-title end -->

		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu">

			<div id="page-menu-wrap">


			</div>

		</div><!-- #page-menu end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					
					<div class="row">

					<?php 
$query = "SELECT * FROM `team`";
$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $memberName = $row['name'];
        $memberPic = $row['image'];
        $memberQualification = $row['qualification'];
        $memberDescription = $row['description'];
        ?>

        <div class="col-md-6 bottommargin">
            <div class="team team-list clearfix">
                <div class="team-image">
                    <img src="Admin/images/team/<?php echo $memberPic; ?>" alt="<?php echo $memberName; ?>" style="height: 180px; width:180px;">
                </div>
                <div class="team-desc">
                    <div class="team-title"><h4><?php echo $memberName; ?></h4><span><?php echo $memberQualification; ?></span></div>
                    <div class="team-content">
                        <p><?php echo $memberDescription; ?></p>
                    </div>	
                </div>
            </div>
        </div>
        
        <?php
    }
}
?>

					</div>
					
					<div class="clear"></div>

				</div>
			</div>
		
	</section><!-- #content end -->

<?php include("footer.php"); ?>
