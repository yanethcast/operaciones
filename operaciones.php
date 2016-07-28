<?php
class Operacion
{
	public function sumar($dato1, $dato2)
	{
		$resultado= $dato1+$dato2;
		$this->resultado=$resultado;
	}
	public function restar($dato1, $dato2)
	{
		$resultado= $dato1-$dato2;
		$this->resultado=$resultado;
	}
	public function multiplicar($dato1, $dato2)
	{
		$resultado= $dato1*$dato2;
		$this->resultado=$resultado;
	}
	public function dividir($dato1, $dato2)
	{
		$resultado= $dato1/$dato2;
		$this->resultado=$resultado;
	}
	public function imprimir()
	{
		echo "El resultado de ".$_POST["select"]." ".$_POST["dato1"]." y ".$_POST["dato2"]." es: "."$this->resultado";				
	}
}
/*$final=new Operacion();
$final->$_POST["select"]($_POST["dato1"],$_POST["dato2"]);
$final->imprimir();*/

?>
