# Gutenberg blocks

## Creating a new block

To create a new block run:

```bash
pnpm create-block <block-name>
```

Then watch for changes:

```bash
pnpm run start
```

This will automatically build the block into the folder `./plugins/bright-lives-blocks/build/**`.

When done with developing you can run:

```bash
pnpm run build
```

This will create a production ready build of the blocks.

## WordPress Resources

- Full list of icons: https://wphelpers.dev/icons/
- Icons to use in block.js: https://developer.wordpress.org/resource/dashicons/
- Core block source code: https://github.com/WordPress/gutenberg/tree/trunk/packages/block-library/
- Component reference (to use in a block's edit.js): https://developer.wordpress.org/block-editor/reference-guides/components/

## Additional Resources

- Custom icons: https://www.svgrepo.com/svg/213955/fullscreen
- [Introduction to Plugin Development](https://developer.wordpress.org/plugins/intro/)
- [Block editor](https://developer.wordpress.org/block-editor/)
- [Render](https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render)