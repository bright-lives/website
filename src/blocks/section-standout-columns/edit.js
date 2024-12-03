import {InnerBlocks, RichText, useBlockProps, useInnerBlocksProps} from "@wordpress/block-editor";
import { useSelect, useDispatch } from '@wordpress/data';
import {__} from "@wordpress/i18n";
import {commonStyle} from "../__components__/common-style";
import {style} from "./style";

export default function edit({attributes, setAttributes, clientId}) {

  const ALLOWED_BLOCKS = ['bright-lives/column'];
  const INNER_BLOCK_TEMPLATE = ['bright-lives/column'];
  const MAX_BLOCKS = 10;

  const { updateBlockAttributes } = useDispatch('core/block-editor');

  const innerBlocks = useSelect(( select ) => {
    const block = select( 'core/block-editor' )?.getBlock(clientId);
    return block ? block.innerBlocks : [];
  }, []);

  const innerBlockCount = innerBlocks?.length || 0;

  const amountOfColumns= style.getAmountOfColumns(innerBlockCount);

  setAttributes({ amountOfColumns });

  innerBlocks.forEach((block, index) => {
    updateBlockAttributes(block.clientId, { index, parentHasAmountOfColumns: amountOfColumns });
  });

  const appenderToUse = () => {
    if (innerBlockCount !== 0 && innerBlockCount < MAX_BLOCKS) {
      return <InnerBlocks.ButtonBlockAppender />;
    } else {
      return false;
    }
  }

  const gridAmountOfCols = `md:grid-cols-${amountOfColumns}`;

  const blockProps = useBlockProps({
    className: '',
  });

  const innerBlockProps = useInnerBlocksProps(
    { className: `grid grid-cols-1 ${gridAmountOfCols} ${style.columnsContainer} w-full` },
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
            className={commonStyle.headings.section}
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
