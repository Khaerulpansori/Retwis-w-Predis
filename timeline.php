<?
include("retwis.php");
include("header.php");
?>
<h2>Global Timeline</h2>
<i>Latest registered users (an example of SORT command!)</i><br>
<?
showLastUsers();
?>
<i>Latest 50 messages from users around the world!</i><br>
<?
showUserPosts(-1,0,50,false);
include("footer.php")
?>
