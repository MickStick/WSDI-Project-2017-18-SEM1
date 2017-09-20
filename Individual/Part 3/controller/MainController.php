<?php
    
    function valname($name){
        if(empty($name) || preg_match("/^[\s]*$/",$name) || preg_match("/^[-]*$/",$name) || !preg_match("/^[a-zA-Z- ]*$/",$name)){
            return false;
        }else{
            return true;
        }
    }

    function valtel($tel){
        if(strlen($tel) < 7 || strlen($tel) > 7){
            return false;
        }else{
            return true;
        }
    }

    function valemail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }else{
            return true;
        }
    }

    function valtrn($trn){
        if(strlen($trn) < 9 || strlen($tel) > 9){
            return false;
        }else{
            if(!preg_match("/^[0-9]$/",$tel)){
                return false;
            }else{
                return true;
            }
        }
    }

    function valpword($pword){
        if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W|_?).{8,}$/",$pword)){
            return false;
        }else if(preg_match("/^(?=.*\s).{0,}$/",$pword)){
            return false;
        }else{
            return true;
        }
    }

    function valrpword($rpword,$pword){
        if($rpword == $pword){
            return true;
        }else{
            return false;
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_REQUEST["valtype"])){
            if($_REQUEST["valtype"] == "name"){
                $name = $_POST["name"];
                if(!valname($name)){
                    echo false;
                }else{
                        echo true;
                }
            }else if($_REQUEST["valtype"] == "tel"){
                $tel = $_POST["tel"] * 1;
                if(!valtel($tel)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "email"){
                $email = $_POST["email"];
                if(!valemail($email)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "trn"){
                $trn = $_POST["trn"];
                if(!valtrn($trn)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "pword"){
                $pword = $_POST["pword"];
                if(!valpword($pword)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "rpword"){
                $pword = $_POST["pword"];
                $rpword = $_POST["rpword"];
                if(!valpword($rpword,$pword)){
                    echo false;
                }else{
                    echo true;
                }
            }
        }else if(isset($_REQUEST["rval"])){
            include "../model/ValErrors.php";
            $err = new ValErrors();
            // $err->setValErrors("fname error","lname error","telephone error","email error","trn error","password error", "password2 error");
            $err.setFnameErr(valname($_POST["fname"]));
            $err.setlnameErr(valname($_POST["lname"]));
            $err.setTelErr(valtel($_POST["tel1"]));
            $err.setEmailErr(valemail($_POST["email"]));
            $err.setTRNErr(valtrn($_POST["trn"]));
            $err.setPwordErr(valname($_POST["pword"]));
            $err.setRPwordErr(valname($_POST["rpword"]));
            $errs = array(
                $err->getFnameErr(),
                $err->getLnameErr(),
                $err->getTelErr(),
                $err->getEmailErr(),
                $err->getTRNErr(),
                $err->getPwordErr(),
                $err->getRPwordErr()
            );
            echo json_encode($errs);
        }
    }
?>
