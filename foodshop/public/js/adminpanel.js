//window.onload = function() {
//    getDishes();
//};

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


function postCookie() {
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "/cart");
    
    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "dishids");
    hiddenField.setAttribute("value", getDishes());

    form.appendChild(hiddenField);

    document.body.appendChild(form);
    form.submit();
}


function changeDishType(dishid, dishtypeid){
    
    var dvalue = dishid+dishtypeid;
 
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "/changeDishType");
    
    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "dishids");
    hiddenField.setAttribute("value", dvalue);

    form.appendChild(hiddenField);

    document.body.appendChild(form);
    form.submit();
}

