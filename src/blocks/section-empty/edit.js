import {InnerBlocks, useBlockProps, useInnerBlocksProps} from '@wordpress/block-editor';
import {useSelect} from "@wordpress/data";
import {style} from './style';

export default function edit({ attributes, setAttributes, clientId }) {

	const ALLOWED_BLOCKS = ['bright-lives/column-empty'];
	const INNER_BLOCK_TEMPLATE = ['bright-lives/column-empty'];

	const innerBlocks = useSelect(( select ) => {
		const block = select( 'core/block-editor' )?.getBlock(clientId);
		return block ? block.innerBlocks : [];
	}, []);

	const innerBlockCount = innerBlocks?.length || 0;

	setAttributes({ amountOfColumns: innerBlockCount });

	const blockProps = useBlockProps();

	const appenderToUse = () => {
		if (innerBlockCount !== 0) {
			return <InnerBlocks.ButtonBlockAppender />;
		} else {
			return false;
		}
	}

	const innerBlockProps = useInnerBlocksProps(
		{ className: `${style.container} ${style.gridAmountOfColsClass(attributes.amountOfColumns)}` },
		{
			allowedBlocks: ALLOWED_BLOCKS,
			template: [INNER_BLOCK_TEMPLATE],
			renderAppender: appenderToUse,
		}
	);

	return (
		<div { ...blockProps }>
			<section {...innerBlockProps}></section>
		</div>
	);
}
