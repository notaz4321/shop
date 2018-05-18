 <?php
  $result = mysql_query("SELECT * FROM categories WHERE type='clothes'",$link);

  if (mysql_num_rows($result) > 0)
{
	$row = mysql_fetch_array($result);
	do
{
	echo '
		<li><a href="'.($row["title"]).'">'.$row["title"].'</a></li>';

}
while ($row = mysql_fetch_array($result));
}
?>