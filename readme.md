
# Readme

## Editing files

To run this application, edit `.env.example` and save it as `.env`.

Then simply use:

```sh
docker compose up
```

This allows you to use: 
- The front-end site: `http://localhost:8000` 
- The BE admin: `http://localhost:8000/wp-admin`.

>  Note: It will either create a new docker container if it does not exist yet, otherwise re-use the existing one.

Then you can run:

```sh
pnpm run start
pnpm run style:watch
```

To start making changes. 

You can make changes to:

- A. WordPress theme: Changes to main templating.
- B. Bright Lives Blocks plugin: The elements you can use on a page in the Gutenberg editor.
- C. Bright Lives Hooks plugin: Actions and Filters that modify WordPress behavior specifically for Bright Lives.

### A. WordPress Theme

You can edit the theme `./bright-lives-theme`.

This folder is mounted to the docker WordPress volume so any change will be reflected automatically.

#### CSS

Tailwind is used in this project.

Typically, you'd only make config changes in `./tailwind.config.js`.

### B. Bright Lives Blocks Plugin

To be able to build pages with custom blocks (Gutenberg) are added next to the core blocks.

The source files of the blocks are located in `./src/blocks`.

The build folder will be built into the plugin `./plugins/bright-lives-blocks/build`.

**Do not edit the files in this folder directly.** Instead, use the `src` files.

See the readme in the `./src/blocks` folder for more information on how to build.

### C. Bright Lives Hooks Plugin

Hooks are located in the `bright-lives-hooks` plugin.

### Database mysqldump

If you would like to make a database dump use the following:

```sh
docker exec bright-lives-db-1 /usr/bin/mysqldump -u root --password=$MYSQL_ROOT_PASSWORD devdb > init-db.sql
```

This will update the `init-db.sql` file. This file is used when running the initial command to set up the WordPress installation.

## Composer (and Mollie)

To install composer packages, run:

```bash
composer install
```

This will install the required mollie php package in a vendor folder. 

## Export

Run:

```bash
pnpm run zip
```

This will create a zip files in the `./__dist__` folder:

- `bright-lives-theme.zip`
- `bright-lives-blocks.zip`
- `bright-lives-hooks.zip`

This will allow you to install the theme and plugins on another WordPress installation.
