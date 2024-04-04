
# Readme

To run this application simply use:

```sh
docker compose up -d
```

When you have run this script, the site is available on: `http://localhost:8000` and the admin on: `http://localhost:8000/wp-admin`.

## Developing

You can edit the theme `./bright-lives-theme`.

This folder is mounted to the docker wordpress volume so any change will be reflected automatically.

## Database mysqldump

If you would like to make a database dump use the following:

```sh
docker exec bright-lives-db-1 /usr/bin/mysqldump -u root --password=$MYSQL_ROOT_PASSWORD devdb > init-db.sql
```

This will update the `init-db.sql` file. This file is used when running the initial command to setup the Wordpress installation.