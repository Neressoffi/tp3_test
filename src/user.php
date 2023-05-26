<?php
class User {
  private $email;
  private $nom;
  private $prenom;
  private $age;

  public function __construct($email, $nom, $prenom, $age) {
    $this->email = $email;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age = $age;
  }

  public function isValid() {
    // Vérifie si l'email est renseigné et a le bon format donc l'email
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      return false;
    }

    // Vérifie si le nom et le prénom sont renseignés
    if (empty($this->nom) || empty($this->prenom)) {
      return false;
    }

    // Vérifie si l'utilisateur a 13 ans ou plus
    $date_naissance = new DateTime($this->age);
    $date_actuelle = new DateTime();
    $interval = $date_actuelle->diff($date_naissance);
    $age_utilisateur = $interval->y;

    if ($age_utilisateur < 13) {
      return false;
    }

    return true;
  }
}
