<?php
$pageTitle = "Post Result";
include "view-header.php";
?>
    <h1>Post Result</h1>
<?php
echo getDisplay();

include "view-footer.php";

function getDisplay() {
    if (isset($_POST['my-name'])) { 
return "<p> The Value Sent Is!: </p>" . $_POST['my-name'];
}else{
 return "<p> Nothing Posted To The Page! </p>";
<?php}
}
?>
