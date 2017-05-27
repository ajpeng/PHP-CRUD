<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

<?php 
	if (isset($_GET["subject"])){
		$current_subject = find_subject_by_id($_GET["subject"]); 
		$current_page = null;
	}elseif(isset($_GET["page"])){
		$current_page = find_page_by_id($_GET["page"]);
		$current_subject = null;
	}else {
		$current_subject = null;
		$current_page = null;
	}

?>
<div id="main">
  <div id="navigation">
		<?php echo navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
		<?php if ($current_subject) { ?>
	    <h2>Manage Subject</h2>
			<?php ?>
			Manage subjects: <?php echo $current_subject["menu_name"]; ?><br />
			
		<?php } elseif ($current_page) { ?>
			<h2>Manage Page</h2>
			<?php ?>
			Manage page: <?php echo $current_page["menu_name"]; ?><br />
			
		<?php } else { ?>
			Please select a subject or a page.
		<?php }?>
  </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
