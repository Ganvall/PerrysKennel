/**
 * Created by JOELTVA on 2016-11-19.
 */

window.onload = setDate();

var intervalID = window.setInterval(setDate, 1000);

function setDate() {
    document.getElementById("time").innerHTML="Current time: " + Date() + ". Page Last changed: " + document.lastModified;
}


