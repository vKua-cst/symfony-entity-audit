# Générer un slug et un audit automatique sur une entité
## Clôner le projet et générer les dépendances
1. Clôner le projet
```
git clone https://github.com/Kuaasar/entity_audit.git
```
2. Générer les dépendances
```
composer install
```
3. Créer la base de données
```
symfony console doctrine:database:create
```
4. Modifier le schéma
```
symfony console doctrine:schema:update --force
```
5. Démarrer le serveur Symfony
```
symfony server:start
```
6. Ajouter un cinéma <a href="https://127.0.0.1/cinema/new">https://127.0.0.1/cinema/new</a> (Le slug et la date de création seront ajoutés).
7. Modifier le cinéma à https://127.0.0.1/cinema/{slug}
8. La date de modification sera mise à jour.