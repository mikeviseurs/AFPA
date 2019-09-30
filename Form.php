<?php
require "head.php";
head("test Form");
class Form {
    private $action;

    private $method;

    public function __construct(string $method, string $action=null)
    {
        $this->action = isset($action)?$action:"#";
        $this->method = $method;
    }

    public function getDebutForm(){
        return "<form action=".$this->getAction()." method=".$this->getMethod().">";
    }

    public function getInput($type,$name,$id) {
        return "<input class='form-control' type =".$type." name = ".$name." id = ".$id.">";
    }
    public function getLabel(string $label, string $for)
    {
        return "<label for=".$for.">".$label."</label>";
    }
    
    public function getButton($type,$value,$color="primary")
    {
        return "<button class='btn btn-".$color." btn-block' type=".$type.">".$value."</button>";
    }

    public function getFinForm()
    {
        return "<form><br>";
    }
    /**
     * Get the value of action
     */ 
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set the value of action
     *
     * @return  self
     */ 
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get the value of method
     */ 
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the value of method
     *
     * @return  self
     */ 
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }
}

$form= new Form("POST");
echo $form->getDebutForm();
echo $form->getInput("text","nom","nom");
echo "<br>";
echo "<br>";
echo $form->getInput("password","password","password");
echo "<br>";
echo "<br>";
echo $form->getButton("submit","Valider");
echo $form->getButton("reset","Annuler","warning");
echo $form->getFinForm();

if (isset($_POST)){
    $nom=isset($_POST['nom'])?$_POST['nom']:'';
    $password=isset($_POST['password'])?$_POST['password']:'';
    echo $nom.", votre mot de passe est : ".$password;
    $_POST=null;
}
require "footer.php";