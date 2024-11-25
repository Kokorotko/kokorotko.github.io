/*document.getElementById("tlacitko").addEventListener("click", calculate); Not Fucking Working*/

function calculate()
{
    var a = parseInt(document.getElementById("cislo1").value) || 0;
    var b = parseInt(document.getElementById("cislo2").value) || 0;
    var x = -666;
    switch(document.getElementById("operace").value)
    {
         case "+": x = a + b; break;
         case "-": x = a - b; break;
         case "*": x = a * b; break;
         case "/": 
         {
            if (b != 0) x = a / b;
            else alert("Deleni 0");
            break;
         }
         default: alert("nenavidim JS");
    }
    document.getElementById("vysledek").innerText = x;
}