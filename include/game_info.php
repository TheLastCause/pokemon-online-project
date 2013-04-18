<?
include_once ('settings.php');
$AddSeperator = '';
$year = '<script type="text/javascript">
var currentDate = new Date()
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  document.write("" +year + "</i></b>")
</script>' ;
@$footer = $year." - ". $GameName.". Fan's made website. This site is not affiliated with Nintendo, The Pokémon Company, Creatures, or GameFreak<br> If you liked our project please send your feedback or report bugs at <a href=".'"mailto:'.$devEmail.'" style="color:#000;">'.$devEmail."</a>";
include('settings.php');
?>