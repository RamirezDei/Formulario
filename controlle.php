<?php 

//class UsuarioController
//{
//	function formato(){
//		require_once('formu.php');
//	}
require('formu.php');

	$formu= new formula( $_POST['correo'], $_POST['nombre'],$_POST['ciudad'],$_POST['estrato'],$_POST['contrato'],$_POST['cargo'],$_POST['salario'],$_POST['pri'],$_POST['seg'],$_POST['ter'],$_POST['cuar'],$_POST['quin'],$_POST['sex'],$_POST['sept'],$_POST['oct'],$_POST['nov'],$_POST['deci'],$_POST['onc'],$_POST['doc']);
	formula::save($formu);
	
    ?>