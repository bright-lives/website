import { __ } from '@wordpress/i18n';
import {InnerBlocks, RichText, useBlockProps} from '@wordpress/block-editor';
import {commonStyle} from "../__components__/common-style";
import { style } from "./style";

export default function edit({ attributes, setAttributes }) {

	const INNER_BLOCK_TEMPLATE = [
		['bright-lives/table-calculation'],
	];

	const blockProps = useBlockProps({
		className: style.container,
	});

	const onChangeTitle = (newTitle) => {
		setAttributes({ title: newTitle });
	};

	return (
		<div { ...blockProps }>
			<div className="mb-12">
				<RichText
					tagName="h2"
					placeholder={__('Title', 'custom-gutenberg-blocks')}
					className={commonStyle.headings.column}
					value={attributes.title}
					onChange={onChangeTitle}
				/>
			</div>
			<InnerBlocks
				template={INNER_BLOCK_TEMPLATE}
				templateLock={true}
			/>
		</div>
	);
}
