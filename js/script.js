			var totalSocial=0;
			var totalEmpresarial=0;

function Agendar(){
			var razon = document.getElementById("razon").value
			var town = document.getElementById("town").value
			var nombre= document.getElementById("nombre").value
			var valor=document.getElementById("valor").value

			var valor1 = parseInt(valor);

			if(razon==="Social"){
				totalSocial+=valor1;
			}
			if(razon==="Empresarial"){
				totalEmpresarial+=valor1;
			}
			else{
			}
			var table = document.getElementById('dataTable');
			var tbody = document.getElementById('body');
			var tfoot = document.getElementById('tfoot');

			arreglo = [town,razon,nombre,valor];

			var total1 = parseInt(document.getElementById("total1").value);
			var total2 = parseInt(document.getElementById("total2").value);	
			
			if (razon === "" || town === "" || nombre === "" || valor === "") {
				alert("campos incompletos");  	 
				if(document.getElementById("razon").value==""){document.getElementById("razon").style.border='1px solid red';}
				if(document.getElementById("nombre").value==""){document.getElementById("nombre").style.border='1px solid red';}
				if(document.getElementById("valor").value==""){document.getElementById("valor").style.border='1px solid red';}
				if(document.getElementById("town").value==""){document.getElementById("town").style.border='1px solid red';}	        
			}	 	
			else{	
				if(document.getElementById("razon").value!=""){document.getElementById("razon").style.border='1px solid green';}
				if(document.getElementById("nombre").value!=""){document.getElementById("nombre").style.border='1px solid green';}
				if(document.getElementById("valor").value!=""){document.getElementById("valor").style.border='1px solid green';}
				if(document.getElementById("town").value!=""){document.getElementById("town").style.border='1px solid green';
				}   		   
		
				    var tr = document.createElement("tr");
				for(var i=0; i<4; i++){
					var celda = document.createElement("td");
					var texto = document.createTextNode(arreglo[i]);
			
					celda.appendChild(texto);
					tr.appendChild(celda);
				}			
				tbody.appendChild(tr);
				table.appendChild(tbody);

				if(razon=="Social"){
					document.getElementById("total1").innerHTML = totalSocial;
				}
				else {
					document.getElementById("total2").innerHTML = totalEmpresarial;
				}
			document.getElementById("town").value = "";
			document.getElementById("razon").value = "";
			document.getElementById("valor").value = "";
			document.getElementById("nombre").value = "";
			valor="";
			razon="";
			nombre="";
			town="";
			}
		}
		
	function loadDptos(){
	    var slDpto = document.getElementById("dpto");
	    var xhr = new XMLHttpRequest();
	    xhr.open("GET","control.php ? opt=1",true);
	    xhr.onreadystatechange = function(){
	        if (xhr.readyState==4 && xhr.status==200) {
	            var resp = xhr.responseText;
	            var dptos = JSON.parse(resp);
	            for(dpto of dptos){
	                var option = document.createElement("option");
	                option.setAttribute("value",dpto.code);
	                option.appendChild(document.createTextNode(dpto.name));
	                slDpto.appendChild(option);
	            }
	        }
	    };
	    xhr.send(null);   
	}
function loadTowns(){
    var sltown = document.getElementById("town");
    var dpto = document.getElementById("dpto").value;
    var imagen = document.getElementById("imagen");
    var idDpto = document.getElementById("codDp");
    sltown.length=0;
    var xhr = new XMLHttpRequest();
    xhr.open("GET","control.php?opt=2 & code="+dpto,true);
    xhr.onreadystatechange = function(){
        if (xhr.readyState==4 && xhr.status==200) {
            var towns = JSON.parse(xhr.responseText);
            for(town of towns){
                if (town.department == dpto) {
                    var option = document.createElement("option");
                    option.setAttribute("value",town.code);
                    option.appendChild(document.createTextNode(town.name));
                    sltown.appendChild(option);
                }
            }
        }
    };
    xhr.send(null); 
    //imagen.setAttribute("src","imagenes/"+dpto+".png");   
    //idDpto.innerHTML = dpto;
}
//function loadid(){
  //  var id = document.getElementById("town").value;
    //var idcd = document.getElementById("codMn");
    //idcd.innerHTML = id;
//}