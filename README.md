Show-When-Scroll
================

Cuando llegamos al final de una página, se nos muestran mas elementos

================

Este paquete está formado por:
	index.php
	functions.js
	data.php
	base.css
	loader.gif

================

index.php
=
	En este archivo se definen 3 variables:
		$n = número de elementos que se muestra cada vez
		$folder = ruta relativa al resto de archivos de la carpeta donde se encuentran todos los elementos
		$style = estilo de la salida. Luego se separará mediante 'explode' esta cadena por donde haya la palabra 'file' y se insertará allí la ruta del archivo.
	
	Despues encontramos la función javascript de cargardatos. Esta no hará falta tocarla.
	
	Luego se llama, mediante php, $n elementos.
	
	Finalmente hay un #loader, donde se cargará la imagen loader.gif
	
================

functions.php
=
	Asignamos la función cargardatos cuando hacemos clic sobre next.
	
================

data.php
=
	Recoge los datos que le pasa el javascript de index.php y hace un echo de las salidas