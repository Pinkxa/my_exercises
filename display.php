

<?php 
require 'connect.php';

$query = 'SELECT * FROM messages';
$query_run = mysql_query($query);
echo '<table border="2">';
echo '<tr>';
echo '<th>ID</th><th>Name</th><th>Email</th><th>About</th><th>Comments</th>';
while($row = mysql_fetch_assoc($query_run)){
	
$id =  $row['Id'];
$name = $row['Name'];
$email =  $row['Email'];
$about_us =  $row['About_us'];
$comments =  $row['Comment'];

/*echo $id.' ';
echo $name;
echo $email;
echo $about_us;
echo $comments;*/

echo '</tr>';
echo '<tr>';
echo '<td>'.$id.'</td><td>'.$name.'</td><td>'.$email.'</td><td>'.$about_us.'</td><td>'.$comments.'</td>';
echo '</tr>';


	}
	echo '</table>';

?>
