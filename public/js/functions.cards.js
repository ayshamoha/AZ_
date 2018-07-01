function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
  
 var id=document.getElementById("id_row"+no);
 var QR_Number=document.getElementById("QR_Number_row"+no);
 var RFID_Munber=document.getElementById("RFID_Munber_row"+no);
 var Created=document.getElementById("Created_row"+no);
 var Updated=document.getElementById("Updated_row"+no);
  
 var id_data=id.innerHTML;
 var QR_Number_data=QR_Number.innerHTML;
 var RFID_Munber_data=RFID_Munber.innerHTML;
 var Created_data=Created.innerHTML;
 var Updated_data=Updated.innerHTML;
  
 id.innerHTML="<input type='text' id='id_text"+no+"' value='"+id_data+"'>";
 QR_Number.innerHTML="<input type='text' id='QR_Number_text"+no+"' value='"+QR_Number_data+"'>";
 RFID_Munber.innerHTML="<input type='text' id='RFID_Munber_text"+no+"' value='"+RFID_Munber_data+"'>";
 Created.innerHTML="<input type='text' id='Created_text"+no+"' value='"+Created_data+"'>";
 Updated.innerHTML="<input type='text' id='Updated_text"+no+"' value='"+Updated_data+"'>";
}

function save_row(no)
{
 var id_val=document.getElementById("id_text"+no).value;
 var QR_Number_val=document.getElementById("QR_Number_text"+no).value;
 var RFID_Munber_val=document.getElementById("RFID_Munber_text"+no).value;
 var Created_val=document.getElementById("Created_text"+no).value;
 var Updated_val=document.getElementById("Updated_text"+no).value;

 document.getElementById("id_row"+no).innerHTML=id_val;
 document.getElementById("QR_Number_row"+no).innerHTML=QR_Number_val;
 document.getElementById("RFID_Munber_row"+no).innerHTML=RFID_Munber_val;
 document.getElementById("Created_row"+no).innerHTML=Created_val;
 document.getElementById("Updated_row"+no).innerHTML=Updated_val;

 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
 var new_id=document.getElementById("new_id").value;
 var new_QR_Number=document.getElementById("new_QR_Number").value;
 var new_RFID_Munber=document.getElementById("new_RFID_Munber").value;
 var new_Created=document.getElementById("new_Created").value;
 var new_Updated=document.getElementById("new_Updated").value; 
  
 var table=document.getElementById("dataTable");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='id_row"+table_len+"'>"+new_id+"</td><td id='QR_Number_row"+table_len+"'>"+new_QR_Number+"</td><td id='RFID_Munber_row"+table_len+"'>"+new_RFID_Munber+"</td><td id='Created_row"+table_len+"'>"+new_Created+"</td><td id='Updated_row"+table_len+"'>"+new_Updated+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='btn  btn-success edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save btn btn-danger' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete btn btn-primary' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_id").value="";
 document.getElementById("new_QR_Number").value="";
 document.getElementById("new_RFID_Munber").value="";
 document.getElementById("new_Created").value="";
 document.getElementById("new_Updated").value="";
}