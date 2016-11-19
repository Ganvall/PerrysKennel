/**
 * Created by JOELTVA on 2016-11-19.
 */

$("<select />").appendTo("nav");

// Create default option "Go to..."
$("<option />", {
    "selected": "selected",
    "value"   : "",
    "text"    : "Go to..."

}).appendTo("nav select");

// Populate dropdown with menu items
$("nav a").each(function() {
    var el = $(this);
    $("<option />", {
        "value"   : el.attr("href"),
        "text"    : el.text()
    }).appendTo("nav select");
});

$(document).ready(function() {
    $("#dropmenu").change(function() {
        location = $("#dropmenu option:selected").val();
        console.log("hejsan");
    });
});
