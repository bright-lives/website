import {useBlockProps} from '@wordpress/block-editor';
import {getLinkClassNames} from "./utils";

export default function save({attributes}) {
	const { style, variant, text, url } = attributes;

	const linkStyles = getLinkClassNames(style, variant);

	const blockProps = useBlockProps.save({
		className: linkStyles,
		href: url,
	});

	return (
		<a { ...blockProps }>
			{ text }
		</a>
	);
}
