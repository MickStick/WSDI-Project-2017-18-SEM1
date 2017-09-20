<?php
    class ValErrors{
        public $fnameErr = null;
        public $lnameErr = null;
        public $telErr = null;
        public $emailErr = null;
        public $trnErr = null;
        public $pwordErr = null;
        public $rpwordErr = null;

        public function setValErrors($fnameErr,$lnameErr,$telErr,$emailErr,$trnErr,$pwordErr,$rpwordErr){
            $this->fnameErr = $fnameErr;
            $this->lnameErr = $lnameErr;
            $this->telErr = $telErr;
            $this->emailErr = $emailErr;
            $this->trnErr = $trnErr;
            $this->pwordErr = $pwordErr;
            $this->rpwordErr = $rpwordErr;
        }

        public function  setFnameErr($fnameErr){
            $this->fnameErr = $fnameErr;
        }

        public function  setLnameErr($lnameErr){
            $this->lnameErr = $lnameErr;
        }

        public function  setTelErr($telErr){
            $this->telErr = $telErr;
        }

        public function  setEmailErr($emailErr){
            $this->emailErr = $emailErr;
        }

        public function  setTRNErr($trnErr){
            $this->trnErr = $trnErr;
        }

        public function  setPwordErr($pwordErr){
            $this->pwordErr = $pwordErr;
        }

        public function  setRPwordErr($rpwordErr){
            $this->rpwordErr = $rpwordErr;
        }

        public function  getFnameErr(){
            return $this->fnameErr;
        }

        public function  getLnameErr(){
            return $this->lnameErr;
        }

        public function  getTelErr(){
            return $this->telErr;
        }

        public function  getEmailErr(){
            return $this->emailErr;
        }

        public function  getTRNErr(){
            return $this->trnErr;
        }

        public function  getPwordErr(){
            return $this->pwordErr;
        }

        public function  getRPwordErr(){
            return $this->rpwordErr;
        }
    }

?>