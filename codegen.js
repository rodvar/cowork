
var i = 0;

function rand_code(chars, lon){
code = "";
for (x=0; x < lon; x++)
{
rand = Math.floor(Math.random()*chars.length);
code += chars.substr(rand, 1);
}
return code;
}

caracteres = "0123456789ABCD";
longitud = 4;

//alert(rand_code(caracteres, longitud));
//devuelve una cadena aleatoria de 20 caracteres



function openWin() {
    window.open("codigodescuento.html","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=400, height=400");
	
}	



 
 
        function clickLink() {
            
			i++;
            if (i == 1) {
                document.getElementById("clicks").innerHTML = i;
            }
            else
            {
                document.getElementById("clicks").innerHTML = i;
            }
			
        }
        function Reset() {
            i = 0;
            document.getElementById("clicks").innerHTML = i;
		}	
