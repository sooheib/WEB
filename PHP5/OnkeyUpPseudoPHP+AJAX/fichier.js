function verifierPseudo()
{
var pseudo=document.getElementById("pseudo").value; 

xhr= new XMLHttpRequest();
var URL="script.php?p="+pseudo;
xhr.onreadystatechange=resultat;
xhr.open("GET",URL,true);
xhr.send(null);

function resultat(){
if(xhr.readyState == 4 && xhr.status == 200 )
{


document.getElementById("zone").innerHTML=xhr.responseText;

}


}


}