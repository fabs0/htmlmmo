var result;
var ran_counter = 999;

function processCommand(f) {
    if (f == "help") {
        var result = command_help();
    } else if (f == "fish") {
        var result = command_fish();
    } else if (f == "XXXXXX") {
        var result = command_XXXXXX();
    } else if (f == "XXXXXX") {
        var result = command_XXXXXX();
    } else {
        var result = "Diesen Command gibt es nicht!";
    }

    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

    var resultwt = time + " | " + result;
    return resultwt;
}

function resetCookies() {
    setCookie("log_s_1", "");
    setCookie("log_s_2", "");
    setCookie("log_s_3", "");
    setCookie("log_s_4", "");
    setCookie("log_c_1", "");
    setCookie("log_c_2", "");
    setCookie("log_c_3", "");
    setCookie("log_c_4", "");
    setCookie("ran_counter", "");
    location.reload();
}


function command_XXXXXX() {

}

function command_help() {
    result = "List of all Commands <a href='help.html' location='_blank' ref='help'>Hilfe</a>";
    return result;
}

function command_fish() {
    var x = Math.round(Math.random() * 10);
    result = "Fished " + x + " raw salmons";
    return result;
}




function postToPHP() {

    if (getCookie("ran_counter") == "") {
        ran_counter = 0;
        alert("cookie empty: now set to " + ran_counter);
    } else {
        ran_counter = parseInt(getCookie("ran_counter"));
        alert("cookie found: now set to " + ran_counter + " raw : " + getCookie("ran_counter"));
    }
    
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

    var command = document.getElementById("commandbox").value;
    document.getElementById("commandbox").value = "";

    debug_vars();

    if (ran_counter > 0) {
        var log_c_3 = getCookie("log_c_4");
        var log_s_3 = getCookie("log_s_4");
    }
    if (ran_counter > 1) {
        var log_c_2 = getCookie("log_c_3");
        var log_s_2 = getCookie("log_s_3");
    }
    if (ran_counter > 2) {
        var log_c_1 = getCookie("log_c_2");
        var log_s_1 = getCookie("log_s_2");
    }
    if (ran_counter = 0) {
        var log_c_3 = "NAN";
        var log_s_3 = "NAN";
        var log_c_2 = "NAN";
        var log_s_2 = "NAN";
        var log_c_1 = "NAN";
        var log_s_1 = "NAN";
    } else if(ran_counter = 1) {
        var log_c_2 = "NAN";
        var log_s_2 = "NAN";
        var log_c_1 = "NAN";
        var log_s_1 = "NAN";
    } else if(ran_count = 2) {
        var log_c_1 = "NAN";
        var log_s_1 = "NAN";
    }

    var serverreply = processCommand(command);
    var log_s_4 = serverreply;
    var log_c_4 = time + " | " + command;

    ran_counter = ran_counter + 1;

    setCookie("log_s_1", log_s_1, 365);
    setCookie("log_s_2", log_s_2, 365);
    setCookie("log_s_3", log_s_3, 365);
    setCookie("log_s_4", log_s_4, 365);
    setCookie("log_c_1", log_c_1, 365);
    setCookie("log_c_2", log_c_2, 365);
    setCookie("log_c_3", log_c_3, 365);
    setCookie("log_c_4", log_c_4, 365);
    setCookie("ran_counter", ran_counter, 365);

    location.reload();
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
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

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function debug_vars() {
    alert("ran_counter: " + ran_counter)
}   