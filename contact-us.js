function _(id) {
    return document.getElementById(id);
}
function submitForm() {
    _("mybtn").disabled = true;
    _("status").innerHTML = 'please wait...';
    var formdata = new FormData();
    formdata.append( "n", _("n").value );
    formdata.append( "e", _("e").value );
    formdata.append( "s", _("s").value );
    formdata.append( "m", _("m").value );
    var ajax = new XMLHttpRequest();
    ajax.open( "POST", "contact_form.php" );
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200) {
            if(ajax.responseText == "success") {
                _("contact").innerHTML = '<p>Thanks '+_("n").value, 'your message has been sent';
            } else {
                _("status").innerHTML = ajax.responseText;
                _("mybtn").disabled = false;
            }
        }
    } 
    ajax.send( formdata );
}