function validate() {

    const fullname = document.getElementById("fullname").value;
    var x = document.getElementById("idTable");
    
    if(fullname == ''){
        alert("Name field is empty!");
        x.style.display = "none";
        return false;
    } else {
        x.style.display = "block";
        return true;
    }
    
}