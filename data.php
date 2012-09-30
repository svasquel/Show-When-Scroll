<?
$n = $_GET['n'];
$folder = $_GET['folder'];
$pagina = $_GET['pagina'];
$style = $_GET['style'];
$type = explode('file', $style);
$file= glob($folder."*");
for ($i = 0; $i < count($file); $i++) {
	$name =explode($folder,$file[$i]);
	$content[$i]=$type[0].$file[$i].$type[1].$name[1].$type[2];
}

$total = count($content);
$posicion = ($pagina-1)*$n;
for ($x=$n; $x<2*$n; $x++) {
 $i= $posicion+$x;
 if ($i<$total){
 echo $content[$i];
 }
 else{echo "<script type='text/javascript'>$('.go-news, #loader').hide()</script>";}
}
?>