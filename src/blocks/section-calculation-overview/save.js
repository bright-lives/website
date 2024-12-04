import {InnerBlocks, RichText, useBlockProps} from '@wordpress/block-editor';
import {style} from "./style";

export default function save({ attributes }) {

	const { title } = attributes;

	const blockProps = useBlockProps.save({
		className: style.sectionContainer,
	});

	return (
		<section {...blockProps}>
			<div className={style.container}>
				<div className={style.firstColumnContainer}>
					<RichText.Content
						tagName="h2"
						className={style.title}
						value={title}
					/>
					<InnerBlocks.Content />
				</div>
			</div>
		</section>
);
}
