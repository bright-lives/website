import {InnerBlocks, useBlockProps, useInnerBlocksProps} from '@wordpress/block-editor';
import {style} from "./style";

import './editor.scss';

export default function edit() {

	const INNER_BLOCK_TEMPLATE = [
		['bright-lives/column-project-costs'],
		['bright-lives/column-donate'],
	];

	const blockProps = useBlockProps({
		className: style.sectionContainer,
	});

	const innerBlocksProps = useInnerBlocksProps();

	return (
		<div { ...blockProps }>
			<div {...innerBlocksProps}>
				<InnerBlocks
					template={INNER_BLOCK_TEMPLATE}
					templateLock={true}
				/>
			</div>
		</div>
	);
}
