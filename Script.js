/**
 * Created by JOELTVA on 2016-11-19.
 */

window.onload = setDate();




function setDate() {
    document.getElementById("time").innerHTML="Current time: " + Date() + ". Page Last changed: " + document.lastModified;
}


