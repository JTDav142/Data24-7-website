//SIDEBAR TOGGLE
var sidebar0pen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
    if (!sidebarOpen) {
        sidebar.classList.add("sidebar-responsive");
        sidebar0pen = true;
    }
}

function closeSidebar() {
    if (sidebarOpen) {
        sidebar.classList.remove("sidebar-responsive");
        sidebarOpen = false;
    }
}

jQuery(window).on("load",function(){
		var word = "Dear Esteemed Agents kindly note that all services are available and delivering fast. Our support contact call/whatsApp 08037525123. Thank you. Admin.";
swal({
  title: "NOTIFICATION",
  text: "Dear Esteemed Agents kindly note that all services are available and delivering fast. Our support contact call/whatsApp 08037525123. Thank you. Admin.",
  icon: "info",
  button: "Okay"
});
	});
