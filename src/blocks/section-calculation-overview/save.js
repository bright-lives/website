import {InnerBlocks, useBlockProps} from '@wordpress/block-editor';
import {style} from "./style";

export default function save() {

	const blockProps = useBlockProps.save({
		className: style.sectionContainer,
	});

	return (
		<section {...blockProps}>
			<div className={style.container}>
				<InnerBlocks.Content />
			</div>
		</section>
	);
}
