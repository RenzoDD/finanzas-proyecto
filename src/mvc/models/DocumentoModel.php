<?php
/*
 * Copyright 2021 (c) Alvaro Cabera
 * Licensed under MIT License
 * Clase Documento
 */

require_once __DIR__.'/DatabaseModel.php';

class DocumentoModel extends DatabaseModel
{
    public $DocumentoID;

	public $EmpresaID;

    public $TipoDocumento;
    public $Emisor;
    public $FechaEmision;
	public $FechaPago;
	public $Moneda;
	public $Monto;
	public $EnFinanciamiento;
    
	private function FillData($destiny, $origin)
	{
		if (isset($origin['DocumentoID']))
			$destiny->DocumentoID = $origin['DocumentoID'];

		if (isset($origin['EmpresaID']))
			$destiny->EmpresaID = $origin['EmpresaID'];

		if (isset($origin['TipoDocumento']))
			$destiny->TipoDocumento = $origin['TipoDocumento'];
			
		if (isset($origin['Emisor']))  
			$destiny->Emisor = $origin['Emisor'];
		
		if (isset($origin['FechaEmision']))  
			$destiny->FechaEmision = $origin['FechaEmision'];

		if (isset($origin['FechaPago']))  
			$destiny->FechaPago = $origin['FechaPago'];

		if (isset($origin['Moneda']))  
			$destiny->Moneda = $origin['Moneda'];

		if (isset($origin['Monto']))  
			$destiny->Monto = $origin['Monto'];

		if (isset($origin['EnFinanciamiento']))  
			$destiny->EnFinanciamiento = $origin['EnFinanciamiento'];
	}

	public function Crear($EmpresaID, $TipoDocumento, $Emisor, $FechaEmision, $FechaPago, $Moneda, $Monto)
	{
		try
		{
			$query = $this->db->prepare("CALL DOCUMENTOS_CREAR(:EmpresaID,:TipoDocumento, :Emisor, :FechaEmision, :FechaPago, :Moneda, :Monto)");
			
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT);
			$query->bindParam(":TipoDocumento", $TipoDocumento, PDO::PARAM_STR);
			$query->bindParam(":Emisor", $Emisor, PDO::PARAM_STR);
			$query->bindParam(":FechaEmision", $FechaEmision, PDO::PARAM_STR);
			$query->bindParam(":FechaPago", $FechaPago, PDO::PARAM_STR); 
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

    public function LeerEmpresaID($EmpresaID)
    {
        try
        {
            $query = $this->db->prepare("CALL DOCUMENTOS_LEER_EMPRESA(:EmpresaID)");
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT); 
            
            if (!$query->execute())
                return [];
                
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $A = [];
            foreach ($result as $row)
            {
                $obj = new DocumentoModel();
                $obj->FillData($obj, $row);
                $A[$obj->DocumentoID] = $obj;
            }

            return $A;
        }
        catch (Exception $e)
        { return []; }
    }

	public function LeerEmpresaMoneda($EmpresaID, $Moneda)
	{
		try
		{
			$query = $this->db->prepare("CALL DOCUMENTOS_LEER_EMPRESA_MONEDA(:EmpresaID, :Moneda)");
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT); 
			$query->bindParam(":Moneda", $Moneda, PDO::PARAM_STR);
			
			if (!$query->execute())
                return [];
                
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $A = [];
            foreach ($result as $row)
            {
                $obj = new DocumentoModel();
                $obj->FillData($obj, $row);
                $A[$obj->DocumentoID] = $obj;
            }

            return $A;
        }
        catch (Exception $e)
        { return []; }
	}

	public function LeerFinanciamientoDisponible($TipoDocumento, $FechaActual)
	{
		try
		{
			$query = $this->db->prepare("CALL DOCUMENTOS_LEER_FINANCIAMIENTO_DISPONIBLE(:TipoDocumento, :FechaActual)");
			$query->bindParam(":TipoDocumento", $TipoDocumento, PDO::PARAM_STR);
			$query->bindParam(":FechaActual", $FechaActual, PDO::PARAM_STR);

			if (!$query->execute())
                return [];
                
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $A = [];
            foreach ($result as $row)
            {
                $obj = new DocumentoModel();
                $obj->FillData($obj, $row);
                $A[$obj->DocumentoID] = $obj;
            }

            return $A;
        }
        catch (Exception $e)
        { return []; }
	}

	public function LeerConFinanciamiento($TipoDocumento, $FechaActual)
	{
		try
		{
			$query = $this->db->prepare("CALL DOCUMENTOS_LEER_CON_FINANCIAMIENTO(:TipoDocumento, :FechaActual)");
			$query->bindParam(":TipoDocumento", $TipoDocumento, PDO::PARAM_STR);
			$query->bindParam(":FechaActual", $FechaActual, PDO::PARAM_STR);

			if (!$query->execute())
                return [];
                
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $A = [];
            foreach ($result as $row)
            {
                $obj = new DocumentoModel();
                $obj->FillData($obj, $row);
                $A[$obj->DocumentoID] = $obj;
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
			$query = $this->db->prepare("CALL DOCUMENTOS_LEER_EMPRESA_MONEDA_RANGO(:EmpresaID,:Moneda,:Inicio,:Fin)");
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT);
			$query->bindParam(":Moneda", $Moneda, PDO::PARAM_STR);
			$query->bindParam(":Inicio", $Inicio, PDO::PARAM_STR);
			$query->bindParam(":Fin", $Fin, PDO::PARAM_STR);

			
			if (!$query->execute())
                return [];
                
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $A = [];
            foreach ($result as $row)
            {
                $obj = new DocumentoModel();
                $obj->FillData($obj, $row);
                $A[$obj->DocumentoID] = $obj;
            }

            return $A;
        }
        catch (Exception $e)
        { return []; }
	}



}

?>