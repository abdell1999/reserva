<?php

class View
{
	public function show($viewName, $data = null)
	{
		include("views/header.php");
		include("views/$viewName.php");
		include("views/footer.php");
	}



	/**
	 * Método diseñado para mostrar vistas de errores personalizados sin header ni footer por lo que el bootstrap es incluido manualmente
	 * en la primera línea.
	 */

	public function show2($viewName)
	{
		echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
		<title>Error</title>";
		include("views/$viewName.php");
		
	}
}
?>