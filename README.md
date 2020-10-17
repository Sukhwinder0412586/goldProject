## Installation

Follow below step to clone.

1. Open Git Bash in the directory you want to clone.
2. Type : **git clone URL** (URL : specified above for clone).
3. **git checkout BranchName**, for eg for "Create Ur Magic" **git checkout goldProject**.
4. **composer install**
5. Open project and rename **.env.example** to **.env** 
7. DB name : goldproject
6. In Git Bash type : **php artisan key:generate**
7. Close Git Bash
8. php artisan migrate
9. php artisan db:seed
10. localhost:8000/admin (admin login) , user id : admin001 , pass : admin123
11. You are good to go *Happy Codding*