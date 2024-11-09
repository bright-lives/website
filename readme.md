
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

To be able to build pages with custom blocks (Gutenburg) are added next to the core blocks.

The source files of the blocks are located in `./src/blocks`.

The build folder will be built into the plugin `./plugins/bright-lives-blocks/build`.

**Do not edit the files in this folder directly.** Instead, use the `src` files.

When editing these blocks run:

```bash
pnpm run start
```

And it will be automatically built into a folder in the plugin.

When done with developing make sure to run:

```bash
pnpm run build
```

This will create a production ready build of the blocks, replacing the files in that build folder.

### Creating a new block

To create a new block run:

```bash
cd src/blocks/ && npx @wordpress/create-block@latest block-name --namespace=bright-lives --no-plugin --variant static
```

And then don't forget to run the start command which will build the block into the plugin and watch for changes:

```bash
pnpm run start
```

## Database mysqldump

If you would like to make a database dump use the following:

```sh
docker exec bright-lives-db-1 /usr/bin/mysqldump -u root --password=$MYSQL_ROOT_PASSWORD devdb > init-db.sql
```

This will update the `init-db.sql` file. This file is used when running the initial command to setup the Wordpress installation.

---

Sources:

- [Introduction to Plugin Development](https://developer.wordpress.org/plugins/intro/)
- [Block editor](https://developer.wordpress.org/block-editor/)
- [Render](https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render)