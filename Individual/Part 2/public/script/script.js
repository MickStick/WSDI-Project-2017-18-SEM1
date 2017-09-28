/*Author: Mikhail Shaw */
$(document).ready(function() {
    $('.HomeMain .lowerIcons span').eq(1).animate({ right: "35%" });
    $('.HomeMain .lowerIcons span').first().animate({ right: "55%" }, 350);

    function addErr(parent, Err) {
        var valErr = $("<label id=\"err\"></label>");
        valErr.text(Err);
        parent.append(valErr);
    }

    $('input[name=fname]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "Only letters and whitespaces");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
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
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "Only letters and whitespaces");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
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
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "must be 7 digist only");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
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
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "Not a valid email address");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
                        here.parent().children('label').remove();
                    }
                }
            }
        };
        formData.append('email', $(this).val());
        xmlhttp.open("POST", "controller/MainController.php?valtype=email");
        xmlhttp.send(formData);
    });

    $('input[name=trn]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "Invlid TRN");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
                        here.parent().children('label').remove();
                    }
                }
            }
        };
        formData.append('trn', $(this).val());
        xmlhttp.open("POST", "controller/MainController.php?valtype=trn");
        xmlhttp.send(formData);
    });

    $('input[name=pword]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), ">=8 characters, 1 uppercase, 1+ lowercase, special character, 1+ numbers, no spaces");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
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
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "Is empty OR Should match with previous password");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
                        here.parent().children('label').remove();
                    }
                }
            }
        };
        formData.append('rpword', $(this).val());
        formData.append('pword', $('input[name=pword]').val());
        xmlhttp.open("POST", "controller/MainController.php?valtype=rpword");
        xmlhttp.send(formData);
    });

    $('#regBtn').click(function(e) {
        e.preventDefault();
        var pass = true;
        var here = $(this);
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var fname = $('input[name=fname]');
        var lname = $('input[name=lname]');
        var tel1 = $('input[name=tel1]');
        var email = $('input[name=email]');
        var trn = $('input[name=trn]');
        var pword = $('input[name=pword]');
        var rpword = $('input[name=rpword]');
        var inputs = [fname, lname, tel1, email, trn, pword, rpword];
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //console.log(this.responseText);
                var err = JSON.parse(this.responseText);
                // console.log(err[0]);
                for (var x = 0; x < err.length; x++) {
                    if (!err[x]) {
                        inputs[x].css({ "outline": "rgba(255,0,0,0.8) solid" });
                        pass = false;
                    } else {
                        inputs[x].css({ "outline": "none" });
                    }
                }
                if (pass) {
                    here.parent().submit();
                }
            }
        };
        formData.append('fname', fname.val());
        formData.append('lname', lname.val());
        formData.append('tel1', tel1.val());
        formData.append('email', email.val());
        formData.append('trn', trn.val());
        formData.append('pword', pword.val());
        formData.append('rpword', rpword.val());
        xmlhttp.open("POST", "controller/MainController.php?rval=all");
        xmlhttp.send(formData);
        // console.log('clicked');
    });

    /////////////////////////////////// Register Ajax Calls /////////////////////////////////End

    /////////////////////////////////// Property Ajax Calls /////////////////////////////////Top

    $('select[name=PropType]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('prop', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "Invalid Type");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
                        here.parent().children('label').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/MainController.php?valtype=prop", true);
        xmlhttp.send(formData);
    });

    $('select[name=BuildType]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('prop', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "Invalid Type");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
                        here.parent().children('label').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/MainController.php?valtype=prop", true);
        xmlhttp.send(formData);
    });

    $('select[name=BedRooms]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('prop', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "State the number of bedrooms");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
                        here.parent().children('label').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/MainController.php?valtype=prop", true);
        xmlhttp.send(formData);
    });

    $('select[name=BathRooms]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('prop', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "State the number of bathrooms");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
                        here.parent().children('label').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/MainController.php?valtype=prop", true);
        xmlhttp.send(formData);
    });

    $('select[name=ListingType]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('prop', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "Invalid Type");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
                        here.parent().children('label').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/MainController.php?valtype=prop", true);
        xmlhttp.send(formData);
    });

    $('input[name=LandSize]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('num', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "Should only be digits");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
                        here.parent().children('label').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/MainController.php?valtype=num", true);
        xmlhttp.send(formData);
    });

    $('input[name=price]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('num', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "Should only be digits");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
                        here.parent().children('label').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/MainController.php?valtype=num", true);
        xmlhttp.send(formData);
    });

    $('#propBtn').click(function(e) {
        e.preventDefault();
        var pass = true;
        var here = $(this);
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var proptype = $('select[name=PropType]');
        var land = $('input[name=LandSize]');
        var buildtype = $('select[name=BuildType]');
        var bedrm = $('select[name=BedRooms]');
        var bathrm = $('select[name=BathRooms]');
        var listtype = $('select[name=ListingType]');
        var price = $('input[name=price]');
        var inputs = [proptype, land, buildtype, bedrm, bathrm, listtype, price];
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var err = JSON.parse(this.responseText);
                // console.log(err[0]);
                for (var x = 0; x < err.length; x++) {
                    if (!err[x]) {
                        inputs[x].css({ "outline": "rgba(255,0,0,0.8) solid" });
                        pass = false;
                    } else {
                        inputs[x].css({ "outline": "none" });
                    }
                }
                if (pass) {
                    here.parent().submit();
                }
            }
        };
        formData.append('proptype', proptype.val());
        formData.append('land', land.val());
        formData.append('buildtype', buildtype.val());
        formData.append('bedrm', bedrm.val());
        formData.append('bathrm', bathrm.val());
        formData.append('listtype', listtype.val());
        formData.append('price', price.val());
        xmlhttp.open("POST", "controller/MainController.php?pval=all");
        xmlhttp.send(formData);
        // console.log('clicked');
    });

    $('#LocMain input').blur(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('addr', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children().length == 1) {
                        addErr(here.parent(), "This is required");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children().length > 1) {
                        here.parent().children('label').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/MainController.php?valtype=addr", true);
        xmlhttp.send(formData);
    });

    $('#locBtn').click(function(e) {
        e.preventDefault();
        var pass = true;
        var here = $(this);
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var addr1 = $('input[name=Saddr1]');
        var addr2 = $('input[name=Saddr2]');
        var city = $('input[name=city]');
        var parish = $('input[name=parish]');
        var country = $('input[name=country]');
        var inputs = [addr1, addr2, city, parish, country];
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var err = JSON.parse(this.responseText);
                // console.log(err[0]);
                for (var x = 0; x < err.length; x++) {
                    if (!err[x]) {
                        inputs[x].css({ "outline": "rgba(255,0,0,0.8) solid" });
                        pass = false;
                    } else {
                        inputs[x].css({ "outline": "none" });
                    }
                }
                if (pass) {
                    here.parent().submit();
                }
            }
        };
        formData.append('addr1', addr1.val());
        formData.append('addr2', addr2.val());
        formData.append('city', city.val());
        formData.append('parish', parish.val());
        formData.append('country', country.val());
        xmlhttp.open("POST", "controller/MainController.php?lval=all");
        xmlhttp.send(formData);
        //console.log("clicked");
    });
});