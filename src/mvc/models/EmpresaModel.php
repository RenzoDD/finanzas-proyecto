<?php
/*
 * Copyright 2021 (c) Alvaro Cabrera
 * Licensed under MIT License
 * Clase Empresa
 */

require_once __DIR__.'/DatabaseModel.php';

class EmpresaModel extends DatabaseModel
{
    public $EmpresaID;

    public $Nombre;
    public $Direccion;
    public $RUC;
    public $Clave;
    public $Salt;
    
	private function FillData($destiny, $origin)
	{
		if (isset($origin['EmpresaID']))
			$destiny->EmpresaID = $origin['EmpresaID'];

		if (isset($origin['Nombre']))
			$destiny->Nombre = $origin['Nombre'];
			
		if (isset($origin['Direccion']))  
			$destiny->Direccion = $origin['Direccion'];
		
        if (isset($origin['RUC']))  
            $destiny->RUC = $origin['RUC'];
		
        if (isset($origin['Clave']))  
            $destiny->Clave = $origin['Clave'];
		
        if (isset($origin['Salt']))  
            $destiny->Salt = $origin['Salt'];
	}

	public function Crear($Nombre,$Direccion,$RUC,$Clave)
	{
		try
		{
			$query = $this->db->prepare("CALL EMPRESAS_CREAR(:Nombre,:Direccion,:RUC,:Clave)");
			$query->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);
			$query->bindParam(":Direccion", $Direccion, PDO::PARAM_STR);
			$query->bindParam(":RUC", $RUC, PDO::PARAM_STR);
			$query->bindParam(":Clave", $Clave, PDO::PARAM_STR);
			
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

    public function LeerTodo()
    {
        try
        {
            $query = $this->db->prepare("CALL EMPRESAS_LEER_TODOS()");
            
            if (!$query->execute())
                return [];
                
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $A = [];
            foreach ($result as $row)
            {
                $obj = new EmpresaModel();
                $obj->FillData($obj, $row);
                $A[$obj->EmpresaID] = $obj;
            }

            return $A;
        }
        catch (Exception $e)
        { return []; }
    }

	public function LeerEmpresaID($EmpresaID)
	{
		try
		{
			$query = $this->db->prepare("CALL EMPRESAS_LEER_ID(:EmpresaID)");
			$query->bindParam(":EmpresaID", $EmpresaID, PDO::PARAM_INT);
			
			if (!$query->execute())
				return null;
				
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			
			if (sizeof($result) == 0)
				return null;
			
			$obj = new EmpresaModel();
			$obj->FillData($obj, $result[0]);
			
			return $obj;
		}
		catch (Exception $e)
		{ return null; }
	}

	public function LeerRUCClave($RUC, $Clave)
	{
		try
		{
			$query = $this->db->prepare("CALL EMPRESAS_LEER_RUC_CLAVE(:RUC, :Clave)");
			$query->bindParam(":RUC", $RUC, PDO::PARAM_STR);
			$query->bindParam(":Clave", $Clave, PDO::PARAM_STR);
			
			if (!$query->execute())
				return null;
				
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			
			if (sizeof($result) == 0)
				return null;
			
			$obj = new EmpresaModel();
			$obj->FillData($obj, $result[0]);
			
			return $obj;
		}
		catch (Exception $e)
		{ return null; }
	}
}

?>