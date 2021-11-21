/* 
 * Copyright 2021 (c) Renzo Diaz
 * Licensed under MIT License
 * JavaScript File
 */

function SetTipo()
{
	var tipo = document.getElementById("tipo");
	var periodo = document.getElementById("periodo");
	var capitalizacion = document.getElementById("capitalizacion");

	capitalizacion.disabled = tipo.value == "EFECTIVA";
}

function ContarDinero()
{
	var select = document.getElementsByClassName("select");
	var moneda = document.getElementsByClassName("moneda");
	var value = document.getElementsByClassName("value");
	var time = document.getElementsByClassName("time");

	var PEN = 0, USD = 0;
	var dia = 0;
	for (var i = 0; i < select.length; i++)
	{
		if (select[i].checked)
		{
			if (moneda[i].innerHTML == "PEN")
				PEN += parseFloat(value[i].value);
			if (moneda[i].innerHTML == "USD")
				USD += parseFloat(value[i].value);

			if (dia < parseInt(time[i].innerHTML))
				dia = parseInt(time[i].innerHTML);
		}
	}

	var bruto = document.getElementById("bruto");
	bruto.value = PEN + USD * globalThis.cambio;

	var dias = document.getElementById("dias");
	dias.value = dia;

}

function ElegirDocumento(id)
{
	var check = document.getElementById("select-" + id);
	var text = document.getElementById("value-" + id);
	var max = document.getElementById("max-" + id);

	text.readOnly = !check.checked;
	text.value = check.checked ? max.innerHTML : 0;

	ContarDinero();
}

function CalcularTCEA()
{
	var tmp = parseInt( document.getElementById("dias").value );
	var t = parseFloat( document.getElementById("tasa").value ) / 100;
	var tt = document.getElementById("tipo").value;
	var p = document.getElementById("periodo").value;
	var c = document.getElementById("capitalizacion").value;
	var MB = parseFloat( document.getElementById("bruto").value );
	var CI = parseFloat( document.getElementById("iniciales").value );
	var CF = parseFloat( document.getElementById("finales").value );

	var t1;

	if(tt == 'EFECTIVA'){
		switch(p)
		{
		case 'DIARIA':
			t1 = Math.pow((1+(t)),(tmp/1)) - 1;
			break;
		case 'QUINCENAL':
			t1 = Math.pow((1+(t)),(tmp/15)) - 1;
			break;
		case 'MENSUAL':
			t1 = Math.pow((1+(t)),(tmp/30)) - 1;
			break;
		case 'BIMESTRAL':
			t1 = Math.pow((1+(t)),(tmp/60)) - 1;
			break;
		case 'SEMESTRAL':
			t1 = Math.pow((1+(t)),(tmp/180)) - 1;
			break;
		case 'ANUAL':
			t1 = Math.pow((1+(t)),(tmp/360)) - 1;
			break;
		}
	}else if(tt == 'NOMINAL'){
		
		switch(p)
		{
		case 'DIARIA':
			t = t/1;
			switch(c)
			{
				case 'DIARIA':
				t1 = Math.pow((1+(t)),(tmp/1)) - 1;
				break;
				case 'QUINCENAL':
				t1 = Math.pow((1+(t)),(tmp/15)) - 1;
				break;
				case 'MENSUAL':
				t1 = Math.pow((1+(t)),(tmp/30)) - 1;
				break;
				case 'BIMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/60)) - 1;
				break;
				case 'SEMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/180)) - 1;
				break;
				case 'ANUAL':
				t1 = Math.pow((1+(t)),(tmp/360)) - 1;
				break;
			}
			break;
		case 'QUINCENAL':
			t = t/15;
			switch(c)
			{
				case 'DIARIA':
				t1 = Math.pow((1+(t)),(tmp/1)) - 1;
				break;
				case 'QUINCENAL':
				t1 = Math.pow((1+(t)),(tmp/15)) - 1;
				break;
				case 'MENSUAL':
				t1 = Math.pow((1+(t)),(tmp/30)) - 1;
				break;
				case 'BIMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/60)) - 1;
				break;
				case 'SEMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/180)) - 1;
				break;
				case 'ANUAL':
				t1 = Math.pow((1+(t)),(tmp/360)) - 1;
				break;
			}
			break;
		case 'MENSUAL':
			t = t/30;
			switch(c)
			{
				case 'DIARIA':
				t1 = Math.pow((1+(t)),(tmp/1)) - 1;
				break;
				case 'QUINCENAL':
				t1 = Math.pow((1+(t)),(tmp/15)) - 1;
				break;
				case 'MENSUAL':
				t1 = Math.pow((1+(t)),(tmp/30)) - 1;
				break;
				case 'BIMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/60)) - 1;
				break;
				case 'SEMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/180)) - 1;
				break;
				case 'ANUAL':
				t1 = Math.pow((1+(t)),(tmp/360)) - 1;
				break;
			}
			break;
		case 'BIMESTRAL':
			t = t/60;
			switch(c)
			{
				case 'DIARIA':
				t1 = Math.pow((1+(t)),(tmp/1)) - 1;
				break;
				case 'QUINCENAL':
				t1 = Math.pow((1+(t)),(tmp/15)) - 1;
				break;
				case 'MENSUAL':
				t1 = Math.pow((1+(t)),(tmp/30)) - 1;
				break;
				case 'BIMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/60)) - 1;
				break;
				case 'SEMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/180)) - 1;
				break;
				case 'ANUAL':
				t1 = Math.pow((1+(t)),(tmp/360)) - 1;
				break;
			}
			break;
		case 'SEMESTRAL':
			t = t/180;
			switch(c)
			{
				case 'DIARIA':
				t1 = Math.pow((1+(t)),(tmp/1)) - 1;
				break;
				case 'QUINCENAL':
				t1 = Math.pow((1+(t)),(tmp/15)) - 1;
				break;
				case 'MENSUAL':
				t1 = Math.pow((1+(t)),(tmp/30)) - 1;
				break;
				case 'BIMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/60)) - 1;
				break;
				case 'SEMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/180)) - 1;
				break;
				case 'ANUAL':
				t1 = Math.pow((1+(t)),(tmp/360)) - 1;
				break;
			}
			break;
		case 'ANUAL':
			t = t/360;
			switch(c)
			{
				case 'DIARIA':
				t1 = Math.pow((1+(t)),(tmp/1)) - 1;
				break;
				case 'QUINCENAL':
				t1 = Math.pow((1+(t)),(tmp/15)) - 1;
				break;
				case 'MENSUAL':
				t1 = Math.pow((1+(t)),(tmp/30)) - 1;
				break;
				case 'BIMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/60)) - 1;
				break;
				case 'SEMESTRAL':
				t1 = Math.pow((1+(t)),(tmp/180)) - 1;
				break;
				case 'ANUAL':
				t1 = Math.pow((1+(t)),(tmp/360)) - 1;
				break;
			}
			break;
		}
	}
	
	var aux = t1/(1+t1);
	var D = MB * aux;
	var VN = MB - D;
	var VE = MB + CF;
	var VR = VN - CI;
	
	var TCEA = Math.pow(VE/VR,tmp/360) - 1;

	document.getElementById("tcea").value = TCEA * 100;

	var monto = MB - CI - CF - D;

	document.getElementById("descuento").value = D;

	document.getElementById("radio-pen").value = monto;
	document.getElementById("radio-usd").value = monto * globalThis.cambio;

	document.getElementById("soles").innerHTML = monto;
	document.getElementById("dolares").innerHTML = monto / globalThis.cambio;

}

function CambiarMoneda(cod) {
	var moneda = document.getElementById("moneda");
	moneda.value = cod;
}