function contientQue(ch ,deb ,fin){
    i=-1;
    do{
        i++;
        c=ch[i].toUpperCase();
    } while(c>="A"&& c<="Z"||i<ch.length-1);
    // if (ch[i]>"A"&&c<="Z")
    return ch[i]>deb &&c<=fin;
}
function verif1(){
    npermis=document.getElementById("npermis").value;
    nom=document.getElementById("nom").value;
    prenom=document.getElementById("prenom").value;
    f=document.getElementById("f").checked;
    m=document.getElementById("m").checked;
    if(npermis.length!=8){
        alert("la taille doit etre 8");
        test=false;
    }
    else if ((isNaN(npermis.substr(0,2)))||(isNaN(npermis.substr(3)))||(npermis.charAt(2)!='/')){
        alert("format num permis invalide!!!")
        test=false;
    }
    else if (nom.length<3|| nom.length>20){
        alert ("le nom doit etre 3 et 20");
        test=false;
    } 
    else if (contientQue(nom,"A","Z")==false){
        alert ("le nom doirt contenier seulement de lettres");
        test=false
    }
    else if (contientQue(prenom,"A","Z")==false){
        alert ("le prenom doirt contenier seulement de lettres");
        test=false
    }
  
    
    else if (f==false && m==false){
        alert("vous devez devez selectin genre")
    }
}
function verif2(){
    test=true
    npermis=document.getElementById("npermis").value;
    list=document.getElementById("list").selectedIndex;
    securite=document.getElementById("securite").value;
    conduite=document.getElementById("conduite").value;
    confort=document.getElementById("confort").value;
    robot=document.getElementById("robot").checked;
    if(npermis.length!=8){
        alert("la taille doit etre 8");
        test=false;
    }
    else if ((isNaN(npermis.substr(0,2)))||(isNaN(npermis.substr(3)))||(npermis.charAt(2)!='/')){
        alert("format num permis invalide!!!")
        test=false;
    }
    else if (list<1){
        alert("vous devez selectioner un model");
        test=false;
    }
    else if (parseInt(securite)<1 || parseInt(securite)>5){
        alert("securite droit etre 1 et 5 ");
        test=false
    }
    else if (parseInt(conduite)<1 || parseInt(conduite)>5){
        alert("securite droit etre 1 et 5 ");
        test=false
    }
    else if (parseInt(confort )<1 || parseInt(confort)>5){
        alert("securite droit etre 1 et 5 ");
        test=false;
    }
    else if (robot==false){
        alert("vous devez cocher la case  je ne suis pas un robot  ");
        test=false;
    }
    return(test)

}