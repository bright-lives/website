
# Readme

To run this application, edit `.env.example` and save it as `.env`.

Then simply use:

```sh
docker compose up
```

This allows you to use: 
- The front-end site: `http://localhost:8000` 
- The BE admin: `http://localhost:8000/wp-admin`.

>  Note: It will either create a new docker container if it does not exist yet, otherwise re-use the existing one.

## WordPress Theme

You can edit the theme `./bright-lives-theme`.

This folder is mounted to the docker WordPress volume so any change will be reflected automatically.

### CSS

Tailwind is used in this project.

Typically, you'd only make config changes in `./tailwind.config.js`. 

When making changes to HTML run:

```bash
pnpm run style:watch
```

This will watch for changes and compiles the necessary classes into `./bright-lives-theme/tailwind.css`.

See `./tailwind.config.js` for the file paths that are being watched.

## Bright Lives Hooks Plugin

Hooks are located in the `bright-lives-hooks` plugin.

## Bright Lives Blocks Plugin

To be able to build pages with custom blocks (Gutenberg) are added next to the core blocks.

The source files of the blocks are located in `./src/blocks`.

The build folder will be built into the plugin `./plugins/bright-lives-blocks/build`.

**Do not edit the files in this folder directly.** Instead, use the `src` files.

See the readme in the `./src/blocks` folder for more information on how to build.

## Database mysqldump

If you would like to make a database dump use the following:

```sh
docker exec bright-lives-db-1 /usr/bin/mysqldump -u root --password=$MYSQL_ROOT_PASSWORD devdb > init-db.sql
```

This will update the `init-db.sql` file. This file is used when running the initial command to set up the WordPress installation.
