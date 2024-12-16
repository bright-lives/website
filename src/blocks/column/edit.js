import {InnerBlocks, RichText, useBlockProps, useInnerBlocksProps} from "@wordpress/block-editor";
import {__} from "@wordpress/i18n";
import {style} from "./style";

export default function edit({attributes, setAttributes}) {

  const ALLOWED_BLOCKS = ['bright-lives/button'];
  const INNER_BLOCK_TEMPLATE = [];

  const blockProps = useBlockProps({
    className: `p-4 !my-0 w-full h-full ${style.getColumnBackgroundColor(attributes.parentHasAmountOfColumns, attributes.index)}`,
  });
  const innerBlockProps = useInnerBlocksProps();

  const titleContainer = "min-h-4rem";

  return (
    <article {...blockProps}>
      <div className={titleContainer}>
        <RichText
          tagName="h3"
          className={`text-l mb-1 ${style.title}`}
          value={attributes.title}
          onChange={(title) => setAttributes({title})}
          placeholder={__('Enter title here', 'custom-gutenberg-blocks')}
        />
      </div>
      <div className={style.contentContainer}>
        <RichText
          tagName="p"
          className="text-white text-sm"
          value={attributes.content}
          onChange={(content) => setAttributes({content})}
          placeholder={__('Enter content here', 'custom-gutenberg-blocks')}
        />
      </div>
      <div {...innerBlockProps}>
        <InnerBlocks
          allowedBlocks={ALLOWED_BLOCKS}
          template={INNER_BLOCK_TEMPLATE}
          templateLock={false}
        />
      </div>
    </article>
  )
}
