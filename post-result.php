<?php
$pageTitle = "Post Result";
include "view-header.php";
?>
    <h1>Post Result</h1>
<?php
if (isset($_POST['my-name']))
{?> 
<p> The Value Sent Is! </p>
<?php
 echo $_POST['my-name'];}
else{
  ?>
  <p> Nothing Posted To The Page! </p>
<?php}
include "view-footer.php";
?>
