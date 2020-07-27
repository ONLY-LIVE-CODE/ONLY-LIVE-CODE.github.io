var link = document.createElement("link");
link.setAttribute("rel", "stylesheet");
link.setAttribute("type", "text/css");
link.setAttribute("href", vsdeskWidget.url + "/widget/widget.css");
document.getElementsByTagName("head")[0].appendChild(link);

var button = document.createElement('div');
button.id = "button_vsdesk";
button.innerText = "✉";
button.className = vsdeskWidget.position;
button.style = 'background-color: ' + vsdeskWidget.color;
document.getElementsByTagName("body")[0].appendChild(button);

var modal = document.createElement('div');
modal.innerHTML =
    '<div id="vsdesk_widget_modal" class="vsmodal" >' +
    '<div id="frame"><a id="close_btn" href="#close" title="Закрыть"></a></div></div>';

document.getElementsByTagName("body")[0].appendChild(modal);
var frame = document.createElement('iframe');
frame.src = vsdeskWidget.url + "/portal/widget";
frame.width = "100%";
frame.height = "100%";
frame.scrolling = "no";
document.getElementById('frame').appendChild(frame);

button.addEventListener('click', function () {
    document.getElementById('vsdesk_widget_modal').classList.add("modalShow");
});

document.getElementById('close_btn').addEventListener('click', function () {
    document.getElementById('vsdesk_widget_modal').classList.toggle("modalShow");
});

if(vsdeskWidget.animate == 'true'){
    var styleSheetElement = document.createElement("style"), customStyleSheet;
    document.head.appendChild(styleSheetElement);
    customStyleSheet = document.styleSheets[0];
    customStyleSheet.insertRule("@-webkit-keyframes button_vsdesk {0% {box-shadow: 0 0 6px 4px rgba(23, 167, 167, 0), 0 0 0px 0px rgba(0, 0, 0, 0), 0 0 0px 0px rgba(23, 167, 167, 0);}10% {box-shadow: 0 0 4px 4px #d1dad7, 0 0 12px 10px rgba(0, 0, 0, 0), 0 0 12px 12px "+vsdeskWidget.color+";}100% {box-shadow: 0 0 4px 4px rgba(23, 167, 167, 0), 0 0 0px 40px rgba(0, 0, 0, 0), 0 0 0px 20px rgba(23, 167, 167, 0);}}");
    // customStyleSheet.insertRule("@-moz-keyframes button_vsdesk {0% {box-shadow: 0 0 6px 4px rgba(23, 167, 167, 0), 0 0 0px 0px rgba(0, 0, 0, 0), 0 0 0px 0px rgba(23, 167, 167, 0);}10% {box-shadow: 0 0 6px 4px #d1dad7, 0 0 12px 10px rgba(0, 0, 0, 0), 0 0 10px 12px "+vsdeskWidget.color+";}100% {box-shadow: 0 0 6px 4px rgba(23, 167, 167, 0), 0 0 0px 40px rgba(0, 0, 0, 0), 0 0 0px 20px rgba(23, 167, 167, 0);}}");
    customStyleSheet.insertRule("@keyframes button_vsdesk {0% {box-shadow: 0 0 6px 4px rgba(23, 167, 167, 0), 0 0 0px 0px rgba(0, 0, 0, 0), 0 0 0px 0px rgba(23, 167, 167, 0);}10% {box-shadow: 0 0 6px 4px #d1dad7, 0 0 12px 10px rgba(0, 0, 0, 0), 0 0 10px 12px "+vsdeskWidget.color+";}100% {box-shadow: 0 0 6px 4px rgba(23, 167, 167, 0), 0 0 0px 40px rgba(0, 0, 0, 0), 0 0 0px 20px rgba(23, 167, 167, 0);}}");
}