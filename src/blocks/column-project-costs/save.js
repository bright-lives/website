import {InnerBlocks, RichText, useBlockProps} from '@wordpress/block-editor';
import {style} from "./style";
import {commonStyle} from "../__components__/common-style";

export default function save({ attributes }) {

	const { title } = attributes;

	const blockProps = useBlockProps.save({
		className: style.container,
	});

	return (
		<div {...blockProps}>
			<RichText.Content
				tagName="h2"
				className={`${commonStyle.headings.column} mb-12`}
				value={title}
			/>
			<InnerBlocks.Content/>
		</div>
	);
}
