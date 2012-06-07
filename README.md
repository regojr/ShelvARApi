ShelvARWeb
==========

Web platform and tools for ShelvAR

Installation
------------

1. Copy files to your server.
2. Create the database you will use for ShelvAR, then import setup/shelvar.sql to create the necessary tables. We use phpMyAdmin for this.
3. Edit db_info.php with the login and password for your database.

Git Branches
------------
The master branch runs on prod, and the dev branch runs on dev. When adding code for a sprint, please branch from dev, then merge back into dev. Big merges from dev to master will be less frequent.