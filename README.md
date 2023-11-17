# The Dream - Currency converter
![Banner](/images/Banner.png)

# Preview
[Live demo](http://washupo.rf.gd/)

# Description
For this project I created a currency converter with [ExchangeRate API](https://www.exchangerate-api.com/) to get updated, accurate & reliable exchange rate for a few selected countries in real time.

The user can choose between different currencies

# Screenschots
## Desktop
![Desktop screenshot 1](/images/Desktop%20screenshot.png)
![Desktop screenshot 2](/images/Desktop%20screenshot2.png)
## Mobile
![Mobile screenshot](/images/Mobile%20screenshot.jpg)

# Techs utilisés 
- PHP
- Docker

# Development environment setup
To setup this development environment you will need to have `docker` and `docker-compose` installed on you system. You can update your projects in the folder `source` and add a `file.sql` into the folder `database`.

**To run the environment:**

* Clone the Repository
* enter this folder
* run `sudo docker-compose up -d` || `docker-compose up` depending which OS you have

=> The environment is composed of *PHP*, *Apache* (running on port _80_), *MariaDB*
and *PHPmyadmin* (running on port _8081_).

### What's inside this repo

  - `docker-compose.yml` // file that has the "instructions" for docker to build ur environments
  - `docker.env` // file that keep secrets  for our application
  - `application/*` // the application itself used inside `docker-compose.yml`
  - `database/mydb.sql` // creates the database and the first table inside the db


This environment is a basic one with only an handful of tools. If you need to
implement new things, such as a mailing system, you will have to do so on the
_docker-compose.yml_ or/and _Dockerfile_.

If all is well you should have access to your environment at
http://localhost:80.

To stop the process run `sudo docker-compose down`, and to clean the created
image run `sudo docker rmi docker_env_server`.

## Cloning the Repository

1. Navigate to the directory that you would like to clone the repository into using commands like:
    `cd`: to change your working directory.
    `cd ../` to "go back" a level in your directory tree.
2. Clone the remote repository and create a local copy on your machine using this command:

    `git clone git@github.com:yvessoham/Javascript.git`

3. Now you can see the contents of the remote repository on your machine by moving into the newly cloned directory:

    `cd TheDream-CurrencyConverter/`
    `ls -la`

### Updating Your Local Repository
When changes are made to the remote repository, they will not automatically sync with your local copy. You can update your local directory by running the following command when your working directory is `TheDream-CurrencyConverter`. You can check your working directory by running pwd, the last item in the path should be `TheDream-CurrencyConverter/`.

To update your local git directory:
`git pull`

**Note:** on `git pull` errors: You may get a `git pull` error if you have made changes to files in your local git directory. This is ok, and normal. If you get an error when you `pull` (or update) the repo that says something like "Your local changes to the following files will be overwritten by merge’", you can do a `git stash` to address this.

### Updating Your Local Changes To The Remote Repository

1. `git status` 
    Always a good idea, this command shows you what branch you're on, what files are in the working or staging directory, and any other important information.
2. `git checkout [branch-name]`
    Switches to the specified branch and updates the working directory.
3. `git commit -m "descriptive message"`
    Records file snapshots permanently in version history.
4. `git push` 
    Uploads all local branch commits to the remote.

<!-- # Copyright 
()[] - Source -->
