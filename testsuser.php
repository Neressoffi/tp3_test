<?php
class UserTest extends User {
    public function testIsValid() {
      // Test avec un utilisateur valide
      $user_valide = new User('test@test.com', 'ariel', 'ng', '1234');
      $this->assertTrue($user_valide->isValid());
  
      // Test avec un email non valide
      $user_email_invalide = new User('test@test.com', 'aristide', 'ng', '1457');
      $this->assertFalse($user_email_invalide->isValid());
  
      // Test avec un nom manquant
      $user_nom_manquant = new User('', '', '', '');
      $this->assertFalse($user_nom_manquant->isValid());
  
      // Test avec un prénom manquant
      $user_prenom_manquant = new User('', '', '', '');
      $this->assertFalse($user_prenom_manquant->isValid());
  
      // Test avec un utilisateur de moins de 13 ans
      $user_age_invalide = new User('', '', '', '');
      $this->assertFalse($user_age_invalide->isValid());
    }
  }
  
