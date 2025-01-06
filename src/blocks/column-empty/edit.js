import {InnerBlocks, useBlockProps} from '@wordpress/block-editor';
import {style} from './style';

export default function edit({ attributes, setAttributes }) {

	const blockProps = useBlockProps({
		className: `${style.container} border-2 border-dashed min-h-8 border-slate-300`,
	});

	return (
		<div { ...blockProps }>
			<InnerBlocks />
		</div>
	);
}
