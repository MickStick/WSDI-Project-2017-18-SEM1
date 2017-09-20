$(document).ready(function() {
    $('.HomeMain .lowerIcons span').eq(1).animate({ right: "35%" });
    $('.HomeMain .lowerIcons span').first().animate({ right: "55%" }, 350);

    var valErr = $("<label id=\"err\"></label>");
    $('input[name=fname]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if(here.parent().children().length == 1){
                       valErr.text("Only letters and whitespaces");
                    here.parent().append(valErr); 
                    }                    
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if(here.parent().children().length > 1){
                        here.parent().children('label').remove();
                    }
                }
            }
        };
        formData.append('name', $(this).val());
        xmlhttp.open("POST", "controller/MainController.php?valtype=name");
        xmlhttp.send(formData);
    });

    $('input[name=lname]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if(here.parent().children().length == 1){
                       valErr.text("Only letters and whitespaces");
                    here.parent().append(valErr); 
                    }                    
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if(here.parent().children().length > 1){
                        here.parent().children('label').remove();
                    }
                }
            }
        };
        formData.append('name', $(this).val());
        xmlhttp.open("POST", "controller/MainController.php?valtype=name");
        xmlhttp.send(formData);
    });

    $('input[name=tel1]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if(here.parent().children().length == 1){
                       valErr.text("must be 7 digist only");
                    here.parent().append(valErr); 
                    }                    
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if(here.parent().children().length > 1){
                        here.parent().children('label').remove();
                    }
                }
            }
        };
        formData.append('tel', $(this).val());
        xmlhttp.open("POST", "controller/MainController.php?valtype=tel");
        xmlhttp.send(formData);
    });

    $('input[name=email]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if(here.parent().children().length == 1){
                       valErr.text("Not a valid email address");
                    here.parent().append(valErr); 
                    }                    
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if(here.parent().children().length > 1){
                        here.parent().children('label').remove();
                    }
                }
            }
        };
        formData.append('email', $(this).val());
        xmlhttp.open("POST", "controller/MainController.php?valtype=email");
        xmlhttp.send(formData);
    });

    $('input[name=pword]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if(here.parent().children().length == 1){
                       valErr.text(">=8 characters, 1 uppercase, 1+ lowercase, special character, 1+ numbers, no spaces");
                    here.parent().append(valErr); 
                    }                    
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if(here.parent().children().length > 1){
                        here.parent().children('label').remove();
                    }
                }
            }
        };
        formData.append('pword', $(this).val());
        xmlhttp.open("POST", "controller/MainController.php?valtype=pword");
        xmlhttp.send(formData);
    });

    $('input[name=rpword]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if(here.parent().children().length == 1){
                       valErr.text("Is empty OR Should match with previous password");
                    here.parent().append(valErr); 
                    }                    
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if(here.parent().children().length > 1){
                        here.parent().children('label').remove();
                    }
                }
            }
        };
        formData.append('rpword', $(this).val());
        formData.append('pword',$('input[name=pword]').val());
        xmlhttp.open("POST", "controller/MainController.php?valtype=rpword");
        xmlhttp.send(formData);
    });

    $('#regBtn').click(function(e){
        e.preventDefault();
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var fname = $(this).parent().children('input[name=fname]').val();
        var lname = $(this).parent().children('input[name=lname]').val();
        var tel1 = $(this).parent().children('input[name=tel1]').val();
        var email = $(this).parent().children('input[name=email]').val();
        var trn = $(this).parent().children('input[name=trn]').val();
        var pword = $(this).parent().children('input[name=pword]').val();
        var rpword = $(this).parent().children('input[name=rpword]').val();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var err = JSON.parse(this.responseText);
                alert(err);
                if(){

                }
            }
        };
        formData.append('fname', fname);
        formData.append('lname', lname);
        formData.append('tel1', tel1);
        formData.append('email', email);
        formData.append('trn', trn);
        formData.append('pword', pword);
        formData.append('rpword', rpword);
        xmlhttp.open("POST", "controller/MainController.php?val=all");
        xmlhttp.send(formData);
    });
});