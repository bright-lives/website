import {RichText, useBlockProps} from '@wordpress/block-editor';
import {style} from "./style";

export default function save({ attributes }) {

	const blockProps = useBlockProps.save({
		className: style.container,
	});

	return (
		<section { ...blockProps }>
			<div className={style.column}>
				<RichText.Content
					tagName="h2"
					className={style.title}
					value={attributes.title}
				/>
				<RichText.Content
					tagName="p"
					className={style.intro}
					value={attributes.intro}
				/>
			</div>
		</section>
	);
}
