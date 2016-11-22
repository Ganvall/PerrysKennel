/**
 * Created by JOELTVA on 2016-11-19.
 */

window.onload = setDate();

var intervalID = window.setInterval(setDate, 1000);

function setDate() {
    document.getElementById("time").innerHTML="Current time: " + Date() + ". Page Last changed: " + document.lastModified;
}

function toggleMenu() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        console.log("hallå")
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
