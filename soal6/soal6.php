

<?php
$con=mysqli_connect("localhost","root","","bootcamparka");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT posts.title as postku, users.username as usernameku, comments.comment as komen FROM posts, users, comments WHERE posts.id=comments.postId and posts.createdBy=users.id";

if ($result=mysqli_query($con,$sql))
  {

  while ($obj=mysqli_fetch_object($result))
    {
    printf ("<br/><br/>Judul : ");
    printf ($obj->postku);
    printf ("<br/> Created by : ");
    printf ($obj->usernameku);
    printf ("<br/> Komentar : ");
    printf ($obj->komen);
    }

  mysqli_free_result($result);
}

mysqli_close($con);
?>