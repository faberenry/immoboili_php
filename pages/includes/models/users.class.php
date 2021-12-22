<?php
use OpenApi\Annotations as OA;
 /*
  User
  Creazione classe user per facilitare il passaggio delle informazioni tra una pagina all'altra
 */
class User{
  private $email;
  private $username;
  private $password;
  private $name;
  private $surname;
  private $phoneNumber;
  private $sospeso = false;
  private $isModeratore = false;

  public function __construct($email, $username, $password, $name, $surname, $phoneNumber)
  {
    $this->username = $username;
    $this->password = $password;
    $this->name = $name;
    $this->surname = $surname;
    $this->phoneNumber = $phoneNumber;
    $this->email = $email;   
  }

  public function insertIntoDB(){
    return "INSERT INTO utente(nome, cognome, username, email, numeroTelefono, sospeso, password, isModeratore) 
      VALUES ('$this->name', '$this->surname', '$this->username', '$this->email', '$this->phoneNumber', 0, '$this->password', 0);";
  }

  public function loginDB()
  {
    return "SELECT username, password
            FROM utente 
            WHERE username = '$this->username' AND password = '$this->password';";
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getSurname()
  {
    return $this->surname;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  public function isSospeso()
  {
    return $this->sospeso;
  }

  public function setSospeso(bool $sospeso)
  {
    $this->sospeso = $sospeso;
  }
}