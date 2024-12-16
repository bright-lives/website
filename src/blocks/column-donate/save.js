import {InnerBlocks, RichText, useBlockProps} from '@wordpress/block-editor';
import {style} from "../column/style";
import {commonStyle} from "../__components__/common-style";

export default function save({ attributes }) {
	const { title, description } = attributes;

	const blockProps = useBlockProps.save({
		className: 'p-20 bg-primary-500'
	});

	return (
		<article {...blockProps}>
			<div className="mb-10">
				<RichText.Content
					tagName="h3"
					className={`${commonStyle.headings.column} ${style.title}`}
					value={title}
				/>
				<RichText.Content
					tagName="h3"
					className={`${style.description}`}
					value={description}
				/>
			</div>
			<InnerBlocks.Content />
		</article>
	);
}
