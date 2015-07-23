<?php
	$json = file_get_contents('https://www.googleapis.com/youtube/v3/videos?id='.$_GET['y'].'&part=snippet&key=AIzaSyDH0MzsHjleGHzAfBTiABS6_CbAGUmy0yI');
	$json = json_decode($json);
?>

<table border="0" align="center">
<tbody>
<tr>
<td valign="top">
<table style="width: 100%; text-align: center;" cellspacing="10" border="0">
<tbody> 
<tr>
<td style="width: 350px; text-align: left; vertical-align:top;">
	<?php
		foreach ($json->items as $item)
		{
			echo "<strong>".$item->snippet->title."</strong>";
			echo "<br />".$item->snippet->description."<br />";
		}		
		?>	
	</td>
<td style="width: 600px; vertical-align:top;" valign="top">&nbsp;<br><iframe title="YouTube video player" src="http://www.youtube.com/embed/<?php echo $_GET['y'] ?>" width="480" height="390" frameborder="0" allowfullscreen="allowfullscreen"></iframe></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>

