<?php
/*
 * Copyright 2021 (c) Renzo Diaz
 * Licensed under MIT License
 * Empresa controller

 */

require_once __MODEL__ . "/DocumentoModel.php";
require_once __MODEL__ . "/FinanciamientoModel.php";
require_once __MODEL__ . "/MovimientoModel.php";

class FinanciamientoController
{
	public static function Financiar()
	{
		$documentosSoles = new DocumentoModel();
		$documentosSoles = $documentosSoles->LeerEmpresaID($_SESSION["EmpresaID"]);
		require __VIEW__ . "/descuento.php";
	}
	public static function GuardarDatos()
	{
		$keys = array_keys($_POST);
		foreach($keys as $key)
			if (str_starts_with($key, "select-"))
			{
				if ($_POST[$key] == "on")
				{
					$code = explode("-",$key)[1];

					$documento = new DocumentoModel();
					$documento = $documento->ModificarAgregarFinanciamiento($code, $_POST["value-" . $code]);
				}
			}

		$_POST["capitalizacion"] = isset($_POST["capitalizacion"]) ? $_POST["capitalizacion"] : "N/A";
		$financiamiento = new FinanciamientoModel();

		$movimiento = new MovimientoModel();
		$movimiento->Crear($_SESSION["EmpresaID"], DateFormat(), "Financiamiento", $_POST["moneda"], $_POST["recibir"]);

		if($financiamiento->Crear($_SESSION["EmpresaID"], DateFormat(), $_POST["moneda"], CAMBIO, $_POST["bruto"], $_POST["recibir"], $_POST["iniciales"], $_POST["finales"],$_POST["descuento"],$_POST["tasa"],$_POST["tipo"],$_POST["periodo"],$_POST["capitalizacion"],$_POST["tcea"]))
			header("Location: /financiar");
		else
			header("Location: /");


	}
}