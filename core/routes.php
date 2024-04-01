<?php
function cargarControlador($controlador){
		
		$nombreControlador = ucwords(strtolower($controlador))."Controller";
		$archivoControlador = 'controllers/'.ucwords(strtolower($controlador)).'.php';
		
		//Si el controlador no existe, redirige a una pagina de error 404
		if(!is_file($archivoControlador)){
			require_once './views/cliente/404.php';
		}
		//De lo contrario, si el controlador existe, lo carga
		else
		{
			require_once $archivoControlador;
			$control = new $nombreControlador();
			return $control;
		}

	}
	
	function cargarAccion($controller, $accion, $id = null){
		//Si el controlador existe, se validan los metodos
		if($controller!=null){
			//Si el metodo existe, lo carga
			if(method_exists($controller, $accion)){
				if($id == null){
					$controller->$accion();
					} else {
					$controller->$accion($id);
				}
				}
				//Si el metodo no existe, redirige a una pagina de error 404
				if(!method_exists($controller, $accion)) {
					//$controller->ACCION_PRINCIPAL();
					require_once './views/cliente/404.php';
		}	
			
		
		}
	}
?>