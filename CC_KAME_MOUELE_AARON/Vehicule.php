<?php

class Vehicule{
    public $Type;
    public $Marque;

    public $Modele;

    public $Couleur;

    public $Immatriculation;

    public $Assurance;

    public $Image;

        public function getType(): ?string 
    {
		return $this->Type;
	}
	
	/**
	 * @param mixed $Type 
	 * @return self
	 */
	public function setType(string $Type): self 
    {
		$this->Type = $Type;
		return $this;
	}

    public function getMarque(): ?string 
    {
		return $this->Marque;
	}
	
	/**
	 * @param mixed $Marque 
	 * @return self
	 */
	public function setMarque(string $Marque): self 
    {
		$this->Marque = $Marque;
		return $this;
	}
        	/**
	 * @return mixed
	 */
	public function getModele(): ?string 
    {
		return $this->Modele;
	}
	
	/**
	 * @param mixed $Modele 
	 * @return self
	 */
	public function setModele(string $Modele): self 
    {
		$this->Modele = $Modele;
		return $this;
	}
        	/**
	 * @return mixed
	 */
	public function getCouleur(): ?string 
    {
		return $this->Couleur;
	}
	
	/**
	 * @param mixed $Couleur 
	 * @return self
	 */
	public function setCouleur(string $Couleur): self 
    {
		$this->Couleur = $Couleur;
		return $this;
	}
        	/**
	 * @return mixed
	 */
	public function getImmatriculation(): ?string 
    {
		return $this->Immatriculation;
	}
	
	/**
	 * @param mixed $Immatriculation 
	 * @return self
	 */
	public function setImmatriculation(string $Immatriculation): self 
    {
		$this->Immatriculation = $Immatriculation;
		return $this;
	}
        	/**
	 * @return mixed
	 */
	public function getAssurance(): ?string 
    {
		return $this->Assurance;
	}
	
	/**
	 * @param mixed $Assurance 
	 * @return self
	 */
	public function setAssurance(string $Assurance): self 
    {
		$this->Assurance = $Assurance;
		return $this;
	}
        	/**
	 * @return mixed
	 */
	public function getImage(): ?string 
    {
		return $this->Image;
	}
	
	/**
	 * @param mixed $Image 
	 * @return self
	 */
	public function setImage(string $Image): self 
    {
		$this->Image = $Image;
		return $this;
	}
    public function __construct()
    {
    }

    	/**
	 * @return mixed
	 */
	
    public function DonneeVehicule($Vehicule){

        if(isset($_POST["choiceType"])){
            $Vehicule->setType($_POST["choiceType"]);
        }else{
            $Vehicule->setType("");
        }

        if(isset($_POST["Marque"])){
            $Vehicule->setMarque($_POST["Marque"]);
        }else{
            $Vehicule->setMarque("");
        }

        if(isset($_POST["Modele"])){
            $Vehicule->setModele($_POST["Modele"]);
        }else{
            $Vehicule->setModele("");
        }

        if(isset($_POST["Couleur"])){
            $Vehicule->setCouleur($_POST["Couleur"]);
        }else{
            $Vehicule->setCouleur("");
        }

        if(isset($_POST["Immatriculation"])){
            $Vehicule->setImmatriculation($_POST["Immatriculation"]);
        }else{
            $Vehicule->setImmatriculation("");
        }

        if(isset($_POST["choice"])){
            $Vehicule->setAssurance($_POST["choice"]);
        }else{
            $Vehicule->setAssurance("");
        }

        if(isset($_FILES["Image"]) && $_FILES["Image"]["error"] == 0){
              $Vehicule->setImage(move_uploaded_file($_FILES["Image"]["tmp_name"],"image/".$_FILES["Image"]["name"])) ;
        }else{
        }
	}
}