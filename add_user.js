function addRow() {
          
    var myName = document.getElementById("name");
    var userId = document.getElementById("userid");
    var mob = document.getElementById("mobileNumber");
    var email = document.getElementById("email");
    var table = document.getElementById("myTableData");
 
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
 
    
    row.insertCell(0).innerHTML= myName.value;
    row.insertCell(1).innerHTML= userId.value;
    row.insertCell(2).innerHTML= mob.value;
    row.insertCell(3).innerHTML= email.value;
    row.insertCell(4).innerHTML= '<input type="button" value = "Delete" onClick="Javacsript:deleteRow(this)">';
 
}
 
function deleteRow(obj) {
      
    var index = obj.parentNode.parentNode.rowIndex;
    var table = document.getElementById("myTableData");
    table.deleteRow(index);
    
}
 

 
function load() {
    
    console.log("Page load finished");
 
}