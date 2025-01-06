import {InnerBlocks, useBlockProps} from '@wordpress/block-editor';
import {style} from "./style";

export default function save({ attributes }) {

	const blockProps = useBlockProps.save({
		className: `container mx-auto py-24 ${style.container} ${style.gridAmountOfColsClass(attributes.amountOfColumns)}`,
	});

	return (
		<section { ...blockProps }>
			<InnerBlocks.Content />
		</section>
	);
}
