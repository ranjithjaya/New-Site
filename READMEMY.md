# Section 1. Introduction

# Section 2. Enviorenment Configuration

## 2. Setup a PHP Enviorenment using XAMPP

## 3. Install Cpompose Package

## 4. Visual Studio Code - Web Development Add ons

## 5. Create Github Account

### One time only

- git init
  - git add READMEMY.md
  - git config --global user.email "ranjithimas@gmail.com"
  - git config --global user.name "Ranjith Jayawardana"

### Commit

    - git commit -m "first commit"
        >> On branch master
            Initial commit
            Untracked files:
            (use "git add <file>..." to include in what will be committed)
                    .vscode/
                    index.php
           nothing added to commit but untracked files present (use "git add" to track)
    - git add .
        add . means add all files
    - git commit -m "first commit"
        >> [master (root-commit) 5803d80] first commit
            3 files changed, 35 insertions(+)
            create mode 100644 .vscode/READMEMY.md
            create mode 100644 .vscode/settings.json
            create mode 100644 index.php
    - git remote add origin https://github.com/ranjithjaya/New-Site.git
        This will define the commited register to remote register
    - git push -u origin master
        This will push the commited register to remote origin
        >> info: please complete authentication in your browser...
            Enumerating objects: 6, done.
            Counting objects: 100% (6/6), done.
            Delta compression using up to 4 threads
            Compressing objects: 100% (5/5), done.
            Writing objects: 100% (6/6), 800 bytes | 266.00 KiB/s, done.
            Total 6 (delta 0), reused 0 (delta 0), pack-reused 0
            To https://github.com/ranjithjaya/New-Site.git
            * [new branch]      master -> master
            branch 'master' set up to track 'origin/master'.


## 6. Create Heroku Account
[Signup for free account](https://signup.heroku.com/login)

## 7. Heroku - No Free Dynos


# Section 3: PHP Basics and Syntax
## 18. PHP Website Layout - With Bootstrap
[Go to Bootstrap](https://getbootstrap.com)
    
    - Include this css in header
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
    - Include this js in footer.php
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    - Adding layout
        - add folowing in the header
```` html
<div class="container"> <!-- Begin of lay out -->
````

        - add folowing in the footer
```` html
</div> <!-- End of lay out -->
````
END
