
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
window.onload = function() {
    getDishes();
};

function addDish(dishid, dishname) {
    setCookie("dishid" + dishid, 1, 1);
    alert(dishname + " Added to cart.");
    getDishes();
//    alert(decodeURIComponent(document.cookie));
//    checkCookie();
}

function getDishes() {
//    alert('aaaad');
    var decodedCookie = decodeURIComponent(document.cookie);
    var splitedCookieValues = decodedCookie.split(";");
    var dishIdCSV = "";
    splitedCookieValues.forEach(function (item, index) {
        while (item.charAt(0) == ' ') {
            item = item.substring(1);
        }
        if (item.indexOf("dishid") == 0) {
            var v = item.split("=")[0];
            dishIdCSV += v.substring(6, v.length) + ",";
        }
    });
    
    try{(document.getElementById("dishids")).value = dishIdCSV;}catch(Exception){}
    return dishIdCSV;
//    alert('bbbb');
//    alert((document.getElementById("dishids")).value);
//    alert(document.getElementById('dishids').val());
    
//    alert(dishIdCSV);
//    forEach(splitedCookieValues, function(){
//        if
//    });
}

function deleteDish(name) {
//    alert(name);
    document.cookie = 'dishid'+name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
//    alert(document.cookie);
    postCookie();
};

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 30);
        }
    }
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


