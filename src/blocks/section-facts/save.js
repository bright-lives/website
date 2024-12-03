import {useBlockProps, RichText} from '@wordpress/block-editor';
import {style} from "./style";
import {commonStyle} from "../__components__/common-style";

export default function save({attributes}) {

	const blockProps = useBlockProps.save({
		className: style.container,
	});

	return (
		<section {...blockProps}>
			{attributes.facts.map((fact) => (
				<>
					<div className={style.titleColumn}>
						<RichText.Content
							tagName="h3"
							className={commonStyle.headings.column}
							value={fact.title}
						/>
					</div>
					<div className={style.contentColumn}>
						<RichText.Content
							tagName="p"
							value={fact.content}
						/>
					</div>
				</>
			))}
		</section>
	);
}
