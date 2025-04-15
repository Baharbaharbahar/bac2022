function test1(){
    let station=document.getElementById("station").selectedIndex;
    if (station==0){
        alert ("choisir une station ");
        return false;
    }
    let saison = document.getElementById("saison").selectedIndex;
    if (saison==0){
        alert ("choisir une saison ");
        return false;
    }
    let a1=document.getElementById("a1").checked;
    let a2=document.getElementById("a2").checked;
    if (!a1&&!a2){
        alert ("choisir un' annee ");
        return false;
    }
    let temperature = document.getElementById("temperature").value;
    if (isNaN(temperature)|| Number(temperature)<-5 || Number(temperature)>50){
        alert ("choisir un temperature ");
        return false;
    }
    let pluie = document.getElementById("pluie").value;
    if (isNaN(pluie)|| Number(pluie)<1 ){
        alert ("choisir un pluie  ");
        return false;
    }
}
function test2(){
    let station=document.getElementById("station").selectedIndex;
    if (station==0){
        alert ("choisir une station ");
        return false;
    }
    let d1=document.getElementById("d1").checked;
    let d2=document.getElementById("d2").checked;
    if (!d1&&!d2){
        alert ("choisir donnee climatique ");
        return false;
    }

}