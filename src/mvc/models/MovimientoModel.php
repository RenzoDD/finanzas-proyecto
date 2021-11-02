<?php
/*
 * Copyright 2021 (c) Manuel Aranguri
 * Licensed under MIT License
 * Class Movimiento
 */

require_once __DIR__.'/DatabaseModel.php';

class MovimientoModel extends DatabaseModel
{
    public $MovimientoID;

    public $EmpresaID;
    public $FinanciamientoID;
	
    public $Fecha;
	public $Detalle;
    public $Moneda;
    public $Monto;
    
	private function FillData($destiny, $origin)
	{
		if (isset($origin['MovimientoID']))
			$destiny->MovimientoID = $origin['MovimientoID'];

		if (isset($origin['EmpresaID']))
			$destiny->EmpresaID = $origin['EmpresaID'];
			
		if (isset($origin['Fecha']))  
			$destiny->Fecha = $origin['Fecha'];
		
		if (isset($origin['Detalle']))  
			$destiny->Detalle = $origin['Detalle'];
		
		if (isset($origin['Detalle']))  
			$destiny->Detalle = $origin['Detalle'];
		
		if (isset($origin['Moneda']))  
			$destiny->Moneda = $origin['Moneda'];
		
		if (isset($origin['Monto']))  
			$destiny->Monto = $origin['Monto'];
	}

	public function Crear($EmpresaID,$Fecha,$Detalle,$Moneda,$Monto)
	{
		try
		{
			$query = $this->db->prepare("CALL MOVIMIENTOS_CREAR (:EmpresaID,:Fecha,:Detalle,:Moneda,:Monto)");
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT);
			$query->bindParam(":Fecha", $Fecha, PDO::PARAM_STR);
			$query->bindParam(":Detalle", $Detalle, PDO::PARAM_STR);
			$query->bindParam(":Moneda", $Moneda, PDO::PARAM_STR);
			$query->bindParam(":Monto", $Monto, PDO::PARAM_STR);
			
			if (!$query->execute())
				return false;
				
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			
			if (sizeof($result) == 0)
				return false;
			
			$this->FillData($this, $result[0]);
			
			return true;
		}
		catch (Exception $e)
		{ return false; }
	}

	public function CrearFinanciamiento($EmpresaID,$FinanciamientoID,$Fecha,$Detalle,$Moneda,$Monto)
	{
		try
		{
			$query = $this->db->prepare("CALL MOVIMIENTOS_CREAR_FINANCIAMIENTO (:EmpresaID,:FinanciamientoID,:Fecha,:Detalle,:Moneda,:Monto)");
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT);
			$query->bindParam(":FinanciamientoID", $FinanciamientoID, PDO::PARAM_INT);
			$query->bindParam(":Fecha", $Fecha, PDO::PARAM_STR);
			$query->bindParam(":Detalle", $Detalle, PDO::PARAM_STR);
			$query->bindParam(":Moneda", $Moneda, PDO::PARAM_STR);
			$query->bindParam(":Monto", $Monto, PDO::PARAM_STR);
			
			if (!$query->execute())
				return false;
				
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			
			if (sizeof($result) == 0)
				return false;
			
			$this->FillData($this, $result[0]);
			
			return true;
		}
		catch (Exception $e)
		{ return false; }
	}
  

	public function LeerEmpresaMoneda($EmpresaID,$Moneda)
	{
		try
		{
			$query = $this->db->prepare("CALL MOVIMIENTOS_LEER_EMPRESA_MONEDA:EmpresaID,:Moneda)");
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT);
			$query->bindParam(":Moneda", $Moneda, PDO::PARAM_STR);
			
			if (!$query->execute())
				return [];
				
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			
			if (sizeof($result) == 0)
				return [];

			$A = [];
            foreach ($result as $row)
            {
                $obj = new MovimientoModel();
                $obj->FillData($obj, $row);
                $A[$obj->MovimientoID] = $obj;
            }

            return $A;
		}
		catch (Exception $e)
		{ return []; }
	}

	public function LeerEmpresaMonedaRango($EmpresaID,$Moneda,$Inicio,$Fin)
	{
		try
		{
			$query = $this->db->prepare("CALL MOVIMIENTOS_LEER_EMPRESA_MONEDA_RANGO :EmpresaID,:Moneda,:Inicio,:Fin)");
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT);
			$query->bindParam(":Moneda", $Moneda, PDO::PARAM_STR);
			$query->bindParam(":Fecha", $Inicio, PDO::PARAM_STR);
			$query->bindParam(":Fecha", $Fin, PDO::PARAM_STR);
			
			if (!$query->execute())
				return [];
				
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			
			if (sizeof($result) == 0)
				return [];
			
			$A = [];
            foreach ($result as $row)
            {
                $obj = new MovimientoModel();
                $obj->FillData($obj, $row);
                $A[$obj->MovimientoID] = $obj;
            }

			return $A;
		}
		catch (Exception $e)
		{ return []; }
	}

	public function LeerSumaEmpresaMonedaFin($EmpresaID,$Moneda,$Fin)
	{
		try
		{
			$query = $this->db->prepare("CALL MOVIMIENTOS_LEER_SUMA_EMPRESA_MONEDA_FIN :EmpresaID,:Moneda,:Fin)");
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT);
			$query->bindParam(":Moneda", $Moneda, PDO::PARAM_STR);
			$query->bindParam(":Fecha", $Fin, PDO::PARAM_STR);
			
			if (!$query->execute())
				return -1;
				
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			
			if (sizeof($result) == 0)
				return -1;
			
			return $result[0]['Monto'];
		
		}
		catch (Exception $e)
		{ return -1; }
	}

}

?>