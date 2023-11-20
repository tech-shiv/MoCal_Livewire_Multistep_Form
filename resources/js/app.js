// jQuery
import "jquery";
import "./bootstrap";
import "@dotlottie/player-component";
// semantic
import "semantic-ui-css/semantic.min.js";
// tinymce
import "tinymce/tinymce";
import "tinymce/skins/ui/oxide/skin.min.css";
import "tinymce/icons/default/icons";
import "tinymce/themes/silver/theme";
import "tinymce/models/dom/model";

window.addEventListener("DOMContentLoaded", () => {
    tinymce.init({
        selector: "#editor",
    });
});


// dropdown
$(".ui.dropdown").dropdown();

// hide optional fields
$(".hide-optional").hide();

$("#individual").click(function () {
    $(".show-optional").show();
    $(".hide-optional").hide();
});

$("#company").click(function () {
    $(".show-optional").hide();
    $(".hide-optional").show();
});
