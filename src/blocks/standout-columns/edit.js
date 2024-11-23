import {InnerBlocks, RichText, useBlockProps, useInnerBlocksProps} from "@wordpress/block-editor";
import { useSelect } from '@wordpress/data';
import {__} from "@wordpress/i18n";
import {plus} from "@wordpress/icons";
import {Button} from "@wordpress/components";
export default function Edit({attributes, setAttributes, clientId}) {

  const ALLOWED_BLOCKS = ['bright-lives/column'];
  const INNER_BLOCK_TEMPLATE = ['bright-lives/column'];
  const MAX_BLOCKS = 4;

  const innerBlockCount = useSelect(( select ) => select( 'core/block-editor' ).getBlock(clientId).innerBlocks);

  const appenderToUse = () => {
    if ( innerBlockCount.length < 5 ) {
      return <InnerBlocks.ButtonBlockAppender />;
    } else {
      return false;
    }
  }

  const blockProps = useBlockProps({
    className: '',
  });
  const innerBlockProps/**/ = useInnerBlocksProps(
    { className: 'grid grid-cols-1 md:grid-cols-4 w-full', },
    {
      allowedBlocks: ALLOWED_BLOCKS,
      template: [INNER_BLOCK_TEMPLATE],
      orientation: 'horizontal',
      renderAppender: appenderToUse,
    }
  );

  return (
    <section {...blockProps}>
      <div className="flex mb-6">
        <div className="grid grid-cols-1 md:grid-cols-2">
          <RichText
            tagName="h2"
            className="text-4xl leading-normal font-serif mb-6"
            value={attributes.title}
            max={MAX_BLOCKS}
            onChange={(title) => setAttributes({title})}
            placeholder={__('Enter title here', 'custom-gutenberg-blocks')}
          />
        </div>
      </div>
      {/*<InnerBlocks*/}
      {/*  className='grid grid-cols-1 md:grid-cols-4'*/}
      {/*  allowedBlocks={ALLOWED_BLOCKS}*/}
      {/*  template={[INNER_BLOCK_TEMPLATE]}*/}
      {/*  renderAppender={appenderToUse}*/}
      {/*/>*/}
      <div {...innerBlockProps}></div>
    </section>
  )
}
