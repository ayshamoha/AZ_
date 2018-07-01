function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
  
 var email=document.getElementById("email_row"+no);
 var ssd=document.getElementById("ssd_row"+no);
 var name=document.getElementById("name_row"+no);
 var phone_number=document.getElementById("phone_number_row"+no);
 var points=document.getElementById("points_row"+no); 
 var Created=document.getElementById("Created_row"+no);
 var Updated=document.getElementById("Updated_row"+no);
  
 var email_data=email.innerHTML;
 var ssd_data=ssd.innerHTML;
 var name_data=name.innerHTML;
 var phone_number_data=phone_number.innerHTML;
 var points_data=points.innerHTML;
 var Created_data=Created.innerHTML;
 var Updated_data=Updated.innerHTML;
  
 email.innerHTML="<input type='text' id='email_text"+no+"' value='"+email_data+"'>";
 ssd.innerHTML="<input type='text' id='ssd_text"+no+"' value='"+ssd_data+"'>";
 name.innerHTML="<input type='text' id='name_text"+no+"' value='"+name_data+"'>";
 phone_number.innerHTML="<input type='text' id='phone_number_text"+no+"' value='"+phone_number_data+"'>";
 points.innerHTML="<input type='text' id='points_text"+no+"' value='"+points_data+"'>"; 
 Created.innerHTML="<input type='text' id='Created_text"+no+"' value='"+Created_data+"'>";
 Updated.innerHTML="<input type='text' id='Updated_text"+no+"' value='"+Updated_data+"'>";
}

function save_row(no)
{
 var email_val=document.getElementById("email_text"+no).value;
 var ssd_val=document.getElementById("ssd_text"+no).value;
 var name_val=document.getElementById("name_text"+no).value;
 var phone_number_val=document.getElementById("phone_number_text"+no).value;
 var points_val=document.getElementById("points_text"+no).value;
 var Created_val=document.getElementById("Created_text"+no).value;
 var Updated_val=document.getElementById("Updated_text"+no).value;

 document.getElementById("email_row"+no).innerHTML=email_val;
 document.getElementById("ssd_row"+no).innerHTML=ssd_val;
 document.getElementById("name_row"+no).innerHTML=name_val;
 document.getElementById("phone_number_row"+no).innerHTML=phone_number_val;
 document.getElementById("points_row"+no).innerHTML=points_val; 
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
 var new_email=document.getElementById("new_email").value;
 var new_ssd=document.getElementById("new_ssd").value;
 var new_name=document.getElementById("new_name").value;
 var new_phone_number=document.getElementById("new_phone_number").value;
 var new_points=document.getElementById("new_points").value; 
 var new_Created=document.getElementById("new_Created").value;
 var new_Updated=document.getElementById("new_Updated").value; 
  
 var table=document.getElementById("dataTable");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='email_row"+table_len+"'>"+new_email+"</td><td id='ssd_row"+table_len+"'>"+new_ssd+"</td><td id='name_row"+table_len+"'>"+new_name+"</td><td id='phone_number_row"+table_len+"'>"+new_phone_number+"</td><td id='points_row"+table_len+"'>"+new_points+"</td><td id='Created_row"+table_len+"'>"+new_Created+"</td><td id='Updated_row"+table_len+"'>"+new_Updated+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='btn  btn-success edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save btn btn-danger' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete btn btn-primary' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_email").value="";
 document.getElementById("new_ssd").value="";
 document.getElementById("new_name").value="";
 document.getElementById("new_phone_number").value="";
 document.getElementById("new_points").value=""; 
 document.getElementById("new_Created").value="";
 document.getElementById("new_Updated").value="";
}