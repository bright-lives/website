import {InnerBlocks, RichText, useBlockProps, useInnerBlocksProps} from "@wordpress/block-editor";
import { useSelect, useDispatch } from '@wordpress/data';
import {__} from "@wordpress/i18n";

export default function Edit({attributes, setAttributes, clientId}) {

  const ALLOWED_BLOCKS = ['bright-lives/column'];
  const INNER_BLOCK_TEMPLATE = ['bright-lives/column'];
  const MAX_BLOCKS = 4;

  const { updateBlockAttributes } = useDispatch('core/block-editor');

  const innerBlockCount = useSelect(( select ) => {
    const block = select( 'core/block-editor' )?.getBlock(clientId);
    return block ? block.innerBlocks : [];
  }, []);

  setAttributes({ amountOfColumns: innerBlockCount.length });

  innerBlockCount.forEach((block, index) => {
    updateBlockAttributes(block.clientId, { index });
  });

  const appenderToUse = () => {
    const amountOfBlocks = innerBlockCount?.length;
    if (amountOfBlocks !== 0 && amountOfBlocks < MAX_BLOCKS) {
      return <InnerBlocks.ButtonBlockAppender />;
    } else {
      return false;
    }
  }

  const blockProps = useBlockProps({
    className: '',
  });

  const innerBlockProps/**/ = useInnerBlocksProps(
    { className: 'grid grid-cols-1 md:grid-cols-4 w-full' },
    {
      allowedBlocks: ALLOWED_BLOCKS,
      template: [INNER_BLOCK_TEMPLATE],
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
            onChange={(title) => setAttributes({title})}
            placeholder={__('Enter title here', 'custom-gutenberg-blocks')}
          />
        </div>
      </div>
      <div {...innerBlockProps}></div>
    </section>
  )
}
