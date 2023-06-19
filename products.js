function validation(){

    var x=document.getElementById("id").value;
    if(x==null || x==""){
        alert('Product ID cant be empty');
        return false;
    }
   

    var y=document.getElementById("name").value;
    if(y.length==0 || y.length>20){
        alert('Enter valid name');
        return false;
    }


    var alphabets=/^[A-Za-z]+$/;
    if(!alphabets.test(y)){
        alert('Enter valid name');
        return false;
    }

    var z=document.getElementById("level").value;
    var m=document.getElementById("quantity").value;
    if(z.length==0 || m.length==0){
        alert('Level and Quantity cant be empty');
        return false;
    }
    if(m<z){
        alert('reorder level should be lessthan quantity');
        return false;
    }

    var n=document.getElementById("cost").value;
    if(n==null || n==""){
        alert('cost cannot be empty');
        return false;
    }
    if(n<=5){
        alert('cost cant be lessthan 5');
        return false;
    }
    return true;

}