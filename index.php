<!DOCTYPE html>
<html id="pics">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="title" content="Show When Scroll" />

<title>Show When Scroll</title>
<!-- stylesheets -->
<link rel="stylesheet" type="text/css" href="base.css"/>
<!-- js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="functions.js"></script>
<?
$n = 4;
$folder = 'files/';
$style= '<a class="item" href="file">file</a>';
?>

<script type="text/javascript">
var pagina=0;
var n = "<?php echo $n; ?>" ;
var folder = "<?php echo $folder; ?>" ;
var style = <?php echo '\''.$style.'\''; ?> ;

function cargardatos(){
	$("#loader").html("<div class='go-news'><img src='loader.gif'/></div>");
	$.get("data.php?pagina="+pagina+"&n="+n+"&folder="+folder+"&style="+style,
		function(data){
				if (data != "") {
						$(".item:last").after(data); 
				}
				$('#loader').empty();
		}
	);
}
$(window).scroll(function(){
	if ($(window).scrollTop() ==  $(document).height()- $(window).height() ){
		pagina++;
		cargardatos()
	}
});
</script>
</head>
<body>
<div class="box">
<h2>Añadir más elementos al hacer Scroll</h2>
<?
$type = explode('file',$style);
$file= glob($folder."*");
if(count($file)<=$n){$tot = count($file);}
else{$tot = $n;}
for ($i = 0; $i < $tot; $i++){
	$name =explode($folder,$file[$i]);
	$content[$i]=$type[0].$file[$i].$type[1].$name[1].$type[2];
}
for ($i = 0; $i < count($content); $i++) { echo $content[$i];}
?>

<div id="loader"></div>
<div class="go-news"><a class="next button color blue">Veure més</a></div>

</div>
</body>
</html>