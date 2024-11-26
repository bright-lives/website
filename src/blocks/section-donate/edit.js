import {InnerBlocks, RichText, useBlockProps, useInnerBlocksProps} from "@wordpress/block-editor";
import {__} from "@wordpress/i18n";
import {style} from "./style";

export default function edit({ attributes, setAttributes }) {

  const ALLOWED_BLOCKS = ['bright-lives/button'];
  const INNER_BLOCK_TEMPLATE = ['bright-lives/button', { style: 'outline', variant: 'inverted' }];

  const blockProps = useBlockProps({
    className: style.section.className,
  });
  const innerBlockProps = useInnerBlocksProps({
    className: style.buttonContainer.className,
  });

  return (
    <section {...blockProps}>
      <div className={style.container.className}>
        <RichText
          tagName="h2"
          className={style.title.className}
          value={attributes.title}
          onChange={(title) => setAttributes({title})}
          placeholder={__('Enter title here', 'custom-gutenberg-blocks')}
        />
        <RichText
          tagName="h2"
          className={style.subTitle.className}
          value={attributes.subTitle}
          onChange={(subTitle) => setAttributes({subTitle})}
          placeholder={__('Enter sub-title here', 'custom-gutenberg-blocks')}
        />
      </div>
      <div {...innerBlockProps}>
        <InnerBlocks
          allowedBlocks={ALLOWED_BLOCKS}
          template={[INNER_BLOCK_TEMPLATE]}
          templateLock="all"
        />
      </div>
    </section>
  )
}