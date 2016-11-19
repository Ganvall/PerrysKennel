/**
 * Created by JOELTVA on 2016-11-19.
 */

window.onload = setDate();
window.onload = setLastChanged();



function setDate() {
    document.getElementById("time").innerHTML=Date();
    console.log("varför");
}

function setLastChanged() {
    var x = document.lastModified;
    document.getElementById("lastchanged").innerHTML= x;
    console.log(document.lastModified)
}

