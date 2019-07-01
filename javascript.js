$(document).ready(function(){
    
    var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			$("#sideNavigationBar").html(this.responseText);
		}
	};
	
	xhttp.open("GET", "sideNavigationBar.html", true);
	xhttp.send();
    
});

$(document).ready(function(){
    
    var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			$("#bottomFooter").html(this.responseText);
		}
	};
	
	xhttp.open("GET", "bottomFooter.html", true);
	xhttp.send();
    
});

//toggle sidebar
$(document).ready(function(){
  $("#sidebarCollapse").click(function(){
    $("#sidebar").toggleClass("active");
  });
});