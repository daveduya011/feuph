
//TO PREVENT SCROLLING
window.addEventListener("keydown", function(e) {
    // space, page up, page down and arrow keys:
    if([32, 33, 34, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
        e.preventDefault();
    }
}, false);

function display(item){
	
	var lab = document.getElementById("facilitiesDescription");
	var lab1 = document.getElementById("lab1Description");
	var lab2 = document.getElementById("lab2Description");
	var lab3 = document.getElementById("lab3Description");
	var lab4 = document.getElementById("lab4Description");
	var labDescriptions = [lab, lab1, lab2, lab3, lab4];
	
	hideAllStrandDescriptions(labDescriptions);
	
	item.style.display = "block";
}

function showDescription(item){
	var choices = document.getElementById("choices");
	
	//we need a smooth transition for this
	choices.style.opacity = "0";
	choices.style.visibility = "hidden";
	
	//showing of descriptions
	//but first, we have to hide all the others first
	var strand1 = document.getElementById("stemDescription");
	var strand2 = document.getElementById("abmDescription");
	var strand3 = document.getElementById("humssDescription");
	var strand4 = document.getElementById("gasDescription");
	var strandDescriptions = [strand1, strand2, strand3, strand4];
	
	item.style.animation = "pop 2s";
	hideAllStrandDescriptions(strandDescriptions);
	item.style.display = "block";
	
	
	
	//show the navigation bar
	var nav = document.getElementById("nav");
	nav.style.opacity = 100;
	nav.style.visibility = "visible";
	nav.style.animation = "wait 0.1s, pop 1s 0.1s";
	
	//then highlight the nav track
	//but first we have to reset their colors
	var nav_tracks = document.getElementsByClassName("nav_track");
	for (var i = 0; i < nav_tracks.length; i++){
		nav_tracks[i].style.color = "#5a5a5a";
	}
	
	if (item.id == "stemDescription"){
		nav_tracks[0].style.color = "#45f39f";
	}
	else if (item.id == "abmDescription"){
		nav_tracks[1].style.color = "#45f39f";
	}
	else if (item.id == "humssDescription"){
		nav_tracks[2].style.color = "#45f39f";
	}
	else if (item.id == "gasDescription"){
		nav_tracks[3].style.color = "#45f39f";
	}
}

function hideAllStrandDescriptions(items){
	for (var i = 0; i < items.length; i++){
		items[i].style.display = "none";
	}
}

function navigate(destination){
	destination.checked = "checked";
	
	document.getElementById("sidebarButton").checked="";
}