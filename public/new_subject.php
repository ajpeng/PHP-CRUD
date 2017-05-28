<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(); ?>

<div id="main">
  <div id="navigation">
		<?php echo navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
  		<h2> Create Subject </h2>
  		<form action ="create_subject.php" method="post">
        <p> Subject name:
        </p>
        <input type="text" name="menu_name" value="" />
        <p>Position:
          <select name="position">
            <option value="1">1</option>
          </select>
        </p>
        <p>Visible:
            <input type="radio" name="visible" value="0"/> No
            &nbsp;
            <input type="radio" name="visible" value="0"/> Yes
        </p>
        <input type="submit" value="Create Subject"/ />
      </form>
      <br/>
      <a href="manage_content.php">Cancel</a>
  </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>


( ! ) Notice: Undefined variable: current_page in C:\wamp64\www\maplestory\public\new_subject.php on line 8
