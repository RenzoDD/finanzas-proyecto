<?php
/*
 * Copyright 2021 (c) Natalia Villanueva
 * Licensed under MIT License
 * Clase Financiamiento
 */

require_once __DIR__ . '/DatabaseModel.php';

class FinanciamientoModel extends DatabaseModel
{
	public $FinanciamientoID;
	public $EmpresaID;
	public $Fecha;
	public $Moneda;
	public $TipoCambio;
	public $MontoBruto;
	public $MontoNeto;
	public $GastosIniciales;
	public $GastosFinales;
	public $Tasa;
	public $TasaTipo;
	public $TasaPeriodo;
	public $TasaCapitalizacion;
	public $Comision;
	public $TCEA;


	private function FillData($destiny, $origin)
	{
		if (isset($origin['FinanciamientoID']))
			$destiny->FinanciamientoID = $origin['FinanciamientoID'];

		if (isset($origin['EmpresaID']))
			$destiny->EmpresaID = $origin['EmpresaID'];

		if (isset($origin['Fecha']))
			$destiny->EmpresaID = $origin['Fecha'];

		if (isset($origin['Moneda']))
			$destiny->Moneda = $origin['Moneda'];

		if (isset($origin['TipoCambio']))
			$destiny->TipoCambio = $origin['TipoCambio'];

		if (isset($origin['MontoBruto']))
			$destiny->MontoBruto = $origin['MontoBruto'];

		if (isset($origin['MontoNeto']))
			$destiny->MontoNeto = $origin['MontoNeto'];

		if (isset($origin['GastosIniciales']))
			$destiny->GastosIniciales = $origin['GastosIniciales'];

		if (isset($origin['GastosFinales']))
			$destiny->GastosFinales = $origin['GastosFinales'];

		if (isset($origin['Tasa']))
			$destiny->Tasa = $origin['Tasa'];

		if (isset($origin['TasaTipo']))
			$destiny->TasaTipo = $origin['TasaTipo'];

		if (isset($origin['TasaPeriodo']))
			$destiny->TasaPeriodo = $origin['TasaPeriodo'];

		if (isset($origin['TasaCapitalizacion']))
			$destiny->TasaCapitalizacion = $origin['TasaCapitalizacion'];

		if (isset($origin['Comision']))
			$destiny->Comision = $origin['Comision'];

		if (isset($origin['TCEA']))
			$destiny->TCEA = $origin['TCEA'];
	}

	public function Crear($EmpresaID, $Fecha, $Moneda,$TipoCambio, $MontoBruto, $MontoNeto, $GastosIniciales, $GastosFinales, $Comision,$Tasa, $TasaTipo, $TasaPeriodo, $TasaCapitalizacion, $TCEA)
	{
		try {
			$query = $this->db->prepare("CALL FINANCIAMIENTOS_CREAR(:EmpresaID,:Fecha,:Moneda,:TipoCambio,:MontoBruto,:MontoNeto,:GastosIniciales,:GastosFinales,:Comision,:Tasa,:TasaTipo,:TasaPeriodo,:TasaCapitalizacion,:TCEA)");
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT);
			$query->bindParam(":Fecha", $Fecha, PDO::PARAM_STR);
			$query->bindParam(":Moneda", $Moneda, PDO::PARAM_STR);
			$query->bindParam(":TipoCambio", $TipoCambio, PDO::PARAM_STR);
			$query->bindParam(":MontoBruto", $MontoBruto, PDO::PARAM_STR);
			$query->bindParam(":MontoNeto", $MontoNeto, PDO::PARAM_STR);
			$query->bindParam(":GastosIniciales", $GastosIniciales, PDO::PARAM_STR);
			$query->bindParam(":GastosFinales", $GastosFinales, PDO::PARAM_STR);
			$query->bindParam(":Comision", $Comision, PDO::PARAM_STR);
			$query->bindParam(":Tasa", $Tasa, PDO::PARAM_STR);
			$query->bindParam(":TasaTipo", $TasaTipo, PDO::PARAM_STR);
			$query->bindParam(":TasaPeriodo", $TasaPeriodo, PDO::PARAM_STR);
			$query->bindParam(":TasaCapitalizacion", $TasaCapitalizacion, PDO::PARAM_STR);
			$query->bindParam(":TCEA", $TCEA, PDO::PARAM_STR);

			if (!$query->execute())
				return false;

			$result = $query->fetchAll(PDO::FETCH_ASSOC);

			if (sizeof($result) == 0)
				return false;

			$this->FillData($this, $result[0]);

			return true;
		} catch (Exception $e) {
			return false;
		}
	}


	public function LeerEmpresaID($EmpresaID)
    {
        try
        {
            $query = $this->db->prepare("CALL FINANCIAMIENTOS_LEER_EMPRESA(:EmpresaID)");
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT);

            if (!$query->execute())
                return [];
                
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $A = [];
            foreach ($result as $row)
            {
                $obj = new FinanciamientoModel();
                $obj->FillData($obj, $row);
                $A[$obj->FinanciamientoID] = $obj;
            }

            return $A;
        }
        catch (Exception $e)
        { return []; }
    }
}
