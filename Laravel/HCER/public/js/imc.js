



function sumar (valor) 
		{
		    var total = 0;	
		    
		    var campo1=document.getElementById("campo_1").value.split(",").join(".");
		    var campo2=document.getElementById("campo_2").value.split(",").join(".");
			

		    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
		    total = (total == null || total == undefined || total == "") ? 0 : total;
			
		    /* Esta es la suma. */
		    var metros = parseFloat(campo2) * parseFloat(campo2);
		    total = (parseFloat(campo1) / metros );
			
		    // Colocar el resultado de la suma en el control "span".


		    if(total<=18){
		    	document.getElementById("select").selectedIndex = 1;
		    }

		    else if (total>=19 && total<=25){
		    		document.getElementById("select").selectedIndex = 2;	
		    	}
		     else if (total>=26 ){
		    		document.getElementById("select").selectedIndex = 3;	
		    	}
		    else if (total>=27 ){
		    		document.getElementById("select").selectedIndex = 4;	
		    	}

		    else if (total>=28 && total<=30 ){
		    		document.getElementById("select").selectedIndex = 5;	
		    	}
		    else if (total>=31 && total<=40 ){
		    		document.getElementById("select").selectedIndex = 6;	
		    	}
		    else if (  total>=41 ){
		    		document.getElementById("select").selectedIndex = 7;	
		    	}
		    	
		    	
		    	

		  
		    document.getElementById("spTotal").value = total;
    	
		}

		window.onload = sumar;