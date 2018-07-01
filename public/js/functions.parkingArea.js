function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
  
 var id=document.getElementById("id_row"+no);
 var name=document.getElementById("name_row"+no);
 var admin_id=document.getElementById("admin_id_row"+no);
 var owner_ssd=document.getElementById("owner_ssd_row"+no);
 var longs=document.getElementById("longs_row"+no);
 var lat=document.getElementById("lat_row"+no);
 var slots_no=document.getElementById("slots_no_row"+no);
 var Created=document.getElementById("Created_row"+no);
 var Updated=document.getElementById("Updated_row"+no);
  
 var id_data=id.innerHTML;
 var name_data=name.innerHTML;
 var admin_id_data=admin_id.innerHTML;
 var owner_ssd_data=owner_ssd.innerHTML;
 var longs_data=longs.innerHTML;
 var lat_data=lat.innerHTML;
 var slots_no_data=slots_no.innerHTML;
 var Created_data=Created.innerHTML;
 var Updated_data=Updated.innerHTML;
  
 id.innerHTML="<input type='text' id='id_text"+no+"' value='"+id_data+"'>";
 name.innerHTML="<input type='text' id='name_text"+no+"' value='"+name_data+"'>";
 admin_id.innerHTML="<input type='text' id='admin_id_text"+no+"' value='"+admin_id_data+"'>";
 owner_ssd.innerHTML="<input type='text' id='owner_ssd_text"+no+"' value='"+owner_ssd_data+"'>";
 longs.innerHTML="<input type='text' id='longs_text"+no+"' value='"+longs_data+"'>";
 lat.innerHTML="<input type='text' id='lat_text"+no+"' value='"+lat_data+"'>";
 slots_no.innerHTML="<input type='text' id='slots_no_text"+no+"' value='"+slots_no_data+"'>";
 Created.innerHTML="<input type='text' id='Created_text"+no+"' value='"+Created_data+"'>";
 Updated.innerHTML="<input type='text' id='Updated_text"+no+"' value='"+Updated_data+"'>";
}

function save_row(no)
{
 var id_val=document.getElementById("id_text"+no).value;
 var name_val=document.getElementById("name_text"+no).value;
 var admin_id_val=document.getElementById("admin_id_text"+no).value;
 var owner_ssd_val=document.getElementById("owner_ssd_text"+no).value;
 var longs_val=document.getElementById("longs_text"+no).value;
 var lat_val=document.getElementById("lat_text"+no).value;
 var slots_no_val=document.getElementById("slots_no_text"+no).value;
 var Created_val=document.getElementById("Created_text"+no).value;
 var Updated_val=document.getElementById("Updated_text"+no).value;

 document.getElementById("id_row"+no).innerHTML=id_val;
 document.getElementById("name_row"+no).innerHTML=name_val;
 document.getElementById("admin_id_row"+no).innerHTML=admin_id_val;
 document.getElementById("owner_ssd_row"+no).innerHTML=owner_ssd_val;
 document.getElementById("longs_row"+no).innerHTML=longs_val;
 document.getElementById("lat_row"+no).innerHTML=lat_val;
 document.getElementById("slots_no_row"+no).innerHTML=slots_no_val;
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
 var new_name=document.getElementById("new_name").value;
 var new_admin_id=document.getElementById("new_admin_id").value;
 var new_owner_ssd=document.getElementById("new_owner_ssd").value;
 var new_longs=document.getElementById("new_longs").value;
 var new_lat=document.getElementById("new_lat").value;
 var new_slots_no=document.getElementById("new_slots_no").value;
 var new_Created=document.getElementById("new_Created").value;
 var new_Updated=document.getElementById("new_Updated").value; 
  
 var table=document.getElementById("dataTable");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='id_row"+table_len+"'>"+new_id+"</td><td id='name_row"+table_len+"'>"+new_name+"</td><td id='admin_id_row"+table_len+"'>"+new_admin_id+"</td><td id='owner_ssd_row"+table_len+"'>"+new_owner_ssd+"</td><td id='longs_row"+table_len+"'>"+new_longs+"</td><td id='lat_row"+table_len+"'>"+new_lat+"</td><td id='slots_no_row"+table_len+"'>"+new_slots_no+"</td><td id='Created_row"+table_len+"'>"+new_Created+"</td><td id='Updated_row"+table_len+"'>"+new_Updated+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='btn  btn-success edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save btn btn-danger' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete btn btn-primary' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_id").value="";
 document.getElementById("new_name").value="";
 document.getElementById("new_admin_id").value="";
 document.getElementById("new_owner_ssd").value="";
 document.getElementById("new_longs").value="";
 document.getElementById("new_lat").value="";
 document.getElementById("new_slots_no").value="";
 document.getElementById("new_Created").value="";
 document.getElementById("new_Updated").value="";
}