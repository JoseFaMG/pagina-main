function validation(){
    var N,E,P,B,A,X;
    N=document.getElementById('Name').value;
    E=document.getElementById('Email').value;
    P=document.getElementById('Phone').value;
    B=document.getElementById('BookingDate').value;
    A=document.getElementById('Aadhar').value;
    if (N==' ' || E==' ' || P==' ' || B==' ' || A==' '){
        alert("Porfavor rellena las casillas faltantes");
    }else{
        alert("Tu registro se envio correctamente");
    }

}