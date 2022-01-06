function addRow() {
          
    var assignment_ID = document.getElementById("assignment_id");
    var userid = document.getElementById("userid");
    var title = document.getElementById("title");
    var statement = document.getElementById("statement");
    var assignedDate = document.getElementById("assignedDate");
    var dueDate = document.getElementById("dueDate");
    var table = document.getElementById("myTableData");
    
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
 
    
    row.insertCell(0).innerHTML= assignment_ID.value;
    row.insertCell(1).innerHTML= userid.value;
    row.insertCell(2).innerHTML= title.value;
    row.insertCell(3).innerHTML= statement.value;
    row.insertCell(4).innerHTML= assignedDate.value;
    row.insertCell(5).innerHTML= dueDate.value;
    row.insertCell(6).innerHTML= '<input type="button" value = "Delete" onClick="Javacsript:deleteRow(this)">';
 
}
 
function deleteRow(obj) {
      
    var index = obj.parentNode.parentNode.rowIndex;
    var table = document.getElementById("myTableData");
    table.deleteRow(index);
    
}
 

 
function load() {
    
    console.log("Page load finished");
 
}