import {useBlockProps, InnerBlocks} from '@wordpress/block-editor';
import {style} from "./style";

export default function save({ attributes }) {

	const blockProps = useBlockProps.save({
		className: style.container,
	});

	return (
		<div { ...blockProps }>
			<InnerBlocks.Content />
		</div>
	);
}
