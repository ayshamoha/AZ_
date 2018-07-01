function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
  
 var id=document.getElementById("id_row"+no);
 var name=document.getElementById("name_row"+no);
 var email=document.getElementById("email_row"+no);
 var password=document.getElementById("password_row"+no);
 var phone_no=document.getElementById("phone_no_row"+no);
 var points=document.getElementById("points_row"+no);
 var remember_token=document.getElementById("remember_token_row"+no);
 var created=document.getElementById("created_row"+no);
 var updated=document.getElementById("updated_row"+no);
  
 var id_data=id.innerHTML;
 var name_data=name.innerHTML;
 var email_data=email.innerHTML;
 var password_data=password.innerHTML;
 var phone_no_data=phone_no.innerHTML;
 var points_data=points.innerHTML;
 var remember_token_data=remember_token.innerHTML;
 var created_data=created.innerHTML;
 var updated_data=updated.innerHTML;
  
 id.innerHTML="<input type='text' id='id_text"+no+"' value='"+id_data+"'>";
 name.innerHTML="<input type='text' id='name_text"+no+"' value='"+name_data+"'>";
 email.innerHTML="<input type='text' id='email_text"+no+"' value='"+email_data+"'>";
 password.innerHTML="<input type='text' id='password_text"+no+"' value='"+password_data+"'>";
 phone_no.innerHTML="<input type='text' id='phone_no_text"+no+"' value='"+phone_no_data+"'>";
 points.innerHTML="<input type='text' id='points_text"+no+"' value='"+points_data+"'>";
 remember_token.innerHTML="<input type='text' id='remember_token_text"+no+"' value='"+remember_token_data+"'>";
 created.innerHTML="<input type='text' id='created_text"+no+"' value='"+created_data+"'>";
 updated.innerHTML="<input type='text' id='updated_text"+no+"' value='"+updated_data+"'>";
}

function save_row(no)
{
 var id_val=document.getElementById("id_text"+no).value;
 var name_val=document.getElementById("name_text"+no).value;
 var email_val=document.getElementById("email_text"+no).value;
 var password_val=document.getElementById("password_text"+no).value;
 var phone_no_val=document.getElementById("phone_no_text"+no).value;
 var points_val=document.getElementById("points_text"+no).value;
 var remember_token_val=document.getElementById("remember_token_text"+no).value;
 var created_val=document.getElementById("created_text"+no).value;
 var updated_val=document.getElementById("updated_text"+no).value;

 document.getElementById("id_row"+no).innerHTML=id_val;
 document.getElementById("name_row"+no).innerHTML=name_val;
 document.getElementById("email_row"+no).innerHTML=email_val;
 document.getElementById("password_row"+no).innerHTML=password_val;
 document.getElementById("phone_no_row"+no).innerHTML=phone_no_val;
 document.getElementById("points_row"+no).innerHTML=points_val;
 document.getElementById("remember_token_row"+no).innerHTML=remember_token_val;
 document.getElementById("created_row"+no).innerHTML=created_val;
 document.getElementById("updated_row"+no).innerHTML=updated_val;

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
 var new_name=document.getElementById("new_name").value;
 var new_email=document.getElementById("new_email").value;
 var new_password=document.getElementById("new_password").value;
 var new_phone_no=document.getElementById("new_phone_no").value;
 var new_points=document.getElementById("new_points").value;
 var new_remember_token=document.getElementById("new_remember_token").value;
 var new_created=document.getElementById("new_created").value;
 var new_updated=document.getElementById("new_updated").value; 
  
 var table=document.getElementById("dataTable");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='id_row"+table_len+"'>"+new_id+"</td><td id='name_row"+table_len+"'>"+new_name+"</td><td id='email_row"+table_len+"'>"+new_email+"</td><td id='password_row"+table_len+"'>"+new_password+"</td><td id='phone_no_row"+table_len+"'>"+new_phone_no+"</td><td id='points_row"+table_len+"'>"+new_points+"</td><td id='remember_token_row"+table_len+"'>"+new_remember_token+"</td><td id='created_row"+table_len+"'>"+new_created+"</td><td id='updated_row"+table_len+"'>"+new_updated+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='btn  btn-success edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save btn btn-danger' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete btn btn-primary' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_id").value="";
 document.getElementById("new_name").value="";
 document.getElementById("new_email").value="";
 document.getElementById("new_password").value="";
 document.getElementById("new_phone_no").value="";
 document.getElementById("new_points").value="";
 document.getElementById("new_remember_token").value="";
 document.getElementById("new_created").value="";
 document.getElementById("new_updated").value="";
}