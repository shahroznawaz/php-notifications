<?php
//insert.php
if(isset($_POST["subject"]))
{
 include("connect.php");
 $subject = mysqli_real_escape_string($con, htmlentities($_POST["subject"], ENT_QUOTES));
 $comment = mysqli_real_escape_string($con, htmlentities($_POST["comment"], ENT_QUOTES));
 $query = "
 INSERT INTO comments(comment_subject, comment_text)
 VALUES ('$subject', '$comment')
 ";
 mysqli_query($con, $query);
}
?>
