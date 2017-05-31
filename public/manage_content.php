<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php require_once("../includes/session.php"); ?>

<?php
	find_selected_page();
?>

  <?php $layout_context = "public"; ?>
<div id="main">

  <div id="navigation">
		<?php echo navigation($current_subject, $current_page); ?>
		<br/> <a href="new_subject.php">Add a subject</a> <br/>
  </div>
  <div id="page">
		<?php echo message(); ?>
		<?php if ($current_subject) { ?>
	    <h2>Manage Subject</h2>
			<?php ?>
			Menu name: <?php echo htmlentities($current_subject["menu_name"]); ?><br />
			Position: <?php echo $current_subject["position"]; ?> </br>
			Visible: <?php echo $current_subject["visible"] == 1 ? "yes" : "no "; ?> </br>
			<a href="edit_subject.php?subject=<?php echo $current_subject["id"]; ?> ">Edit Subject</a>


		<?php } elseif ($current_page) { ?>
			<h2>Manage Page</h2>
			<?php ?>
			Menu name: <?php echo htmlentities($current_page["menu_name"]); ?><br />
			Position: <?php echo $current_page["position"]; ?> </br>
			Visible: <?php echo $current_page["visible"] == 1 ? "yes" : "no "; ?> </br>
			Content:<br />
			<div class="view-content">
				<?php echo htmlentities($current_page["content"]); ?>
			</div>
			<br />
			  <a href="edit_page.php?page=<?php echo urlencode($current_page['id']); ?>">Edit page</a>
		<?php } else { ?>
			Please select a subject or a page.
		<?php }?>
  </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
