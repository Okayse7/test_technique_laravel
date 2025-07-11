# Test-technique

---

# Gestion de Réservations Immobilières 

## Présentation

Cette application permet de gérer des propriétés immobilières et d’enregistrer des réservations via une interface publique et une interface d’administration (Filament).  

---

## Fonctionnalités principales

- **Affichage des propriétés** sur la page d’accueil
- **Réservation publique** : formulaire Livewire pour réserver un bien (avec date de début et de fin)
- **Gestion des propriétés et réservations** via l’admin Filament 


---

## Installation

1. **Installer les dépendances**
   ```sh
   composer install
   npm install && npm run build
   ```

2. **Configurer l’environnement**
   - Créer une base de données MySQL 
   - Créer et modifier le .env à partir du .env.example pour se connecter à sa base de données MySQL avec le nom de sa DB, l'utilisateur et le mdp  
   - Générer la clé d’application :
     ```sh
     php artisan key:generate
     ```

4. **Migrer et peupler la base avec la seed **
   ```sh
   php artisan migrate:fresh --seed
   ```

5. **Lancer le serveur**
   ```sh
   php artisan serve
   ```

---

## Utilisation

- Accéder à `http://localhost:8000/home` pour voir la liste des propriétés et réserver en tant que client ( on est redirigé vers le /login si on est pas connecté et dans ce cas prendre un des compte  .
- Cliquer sur “Réserver” ouvre un formulaire Livewire pour saisir le nom et les dates.
- Les réservations sont enregistrées et consultables dans l’admin Filament ou sur la base de données mysql.
- Accéder à `http://localhost:8000/root` pour accéder à la partie admin (on peut se log avec un des faux comptes dans le fichier seed localisé dans ./database/seeders . 

---

## Structure technique

- **Modèles** : `Property`, `Booking`, `User`
- **Composants Livewire** :  
  - `BookingManager` : formulaire public de réservation
- **Vues principales** :  
  - home.blade.php : accueil et propriétés 
  - booking-manager.blade.php : formulaire de réservation
- **Seeders** :  
  - DatabaseSeeder.php : utilisateurs et propriétés de test 

---

