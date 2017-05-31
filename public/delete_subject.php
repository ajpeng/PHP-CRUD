<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
  $current_subject = find_subject_by_id($_GET["subject"], false);
  if(!$current_subject){
    redirect_to("manage_content.php");
  }

  $id = $current_subject["id"];
  $query = "DELETE FROM subjects WHERE id = {$id} LIMIT 1";
  $result = mysqli_query($connection , $query);

  if($result && mysqli_affected_rows($connection) == 1){
    //Sucess
    $_SESSION["message"] = "Subject deleted.";
    redirect_to("manage_content.php");
  } else {
    // Failure
    $_SESSION["message"] = "Subject deletion failed.";
    redirect_to("manage_content.php?subject={$id}");
  }
?>
