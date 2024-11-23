import {InnerBlocks, RichText, useBlockProps, useInnerBlocksProps} from "@wordpress/block-editor";
import {__} from "@wordpress/i18n";

export default function Edit({attributes, setAttributes}) {

  const ALLOWED_BLOCKS = ['bright-lives/button'];
  const INNER_BLOCK_TEMPLATE = ['bright-lives/button', { style: 'fill' }];

  const blockProps = useBlockProps({
    className: 'p-10 bg-primary-500',
  });
  const innerBlockProps = useInnerBlocksProps();

  return (
    <article {...blockProps}>
      <div className="h-28">
        <RichText
          tagName="h3"
          className="text-2xl font-heading text-white mb-4"
          value={attributes.title}
          onChange={(title) => setAttributes({title})}
          placeholder={__('Enter title here', 'custom-gutenberg-blocks')}
        />
      </div>
      <div className="h-48">
        <RichText
          tagName="p"
          className="text-white"
          value={attributes.content}
          onChange={(content) => setAttributes({content})}
          placeholder={__('Enter content here', 'custom-gutenberg-blocks')}
        />
      </div>
      <div {...innerBlockProps}>
        <InnerBlocks
          allowedBlocks={ALLOWED_BLOCKS}
          template={[INNER_BLOCK_TEMPLATE]}
          templateLock="all"
        />
      </div>
    </article>
  )
}
