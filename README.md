# Wordpress Development Environment


## Install Wordpress

```sh
bash dev install
```

## Start application

First time running:

```sh
bash dev build && bash dev up
```

Normal startup:

```sh
bash dev up
```

## Stop application

```sh
bash dev down
```

## Restart application

```sh
bash dev restart
```

## Remove local installation

This command will delete database and Wordpress directories.

> Make sure you have backed up your database before running this command!

```sh
bash dev remove
```


## Accessing Application

```
http://localhost:8080
```

## Other

### Permissions

If you have any trouble with permission, just run these commands:

> change [user] to your actual logged user

```sh
sudo chown -R [user]:www-data wordpress src/wp-content/
sudo chmod -R 775 wordpress/ src/wp-content/
```

### Updating Wordpress Core

By default, Wordpress is going to have its core saved into binaries directory.

If you need to update it, just download the latest version by using these commands:

```sh
cd src/binaries
sudo rm latest.tar.gz
wget http://wordpress.org/latest.tar.gz
```