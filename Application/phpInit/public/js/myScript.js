function srcFunc(pass)
{
	var keys = document.getElementById("searcherBox").value;
	var pass = pass;
	$.ajax({
	   type:'POST',
	   url:'/searchBy',
	   data:{
		   _token : pass,
		   keyword : keys
	   },
	   success:function(data) {
		  $("#searchList").html(data.msg);
	   }
	});
}

function barOpen()
{
  document.getElementById("sideBar").style.display="block";
}
function barClose()
{
  document.getElementById("sideBar").style.display="none";
}