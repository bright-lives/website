import { useBlockProps } from '@wordpress/block-editor';
import {getLinkClassNames} from "./utils";

export default function save({attributes}) {
	const { style, variant, text, url } = attributes;

	const linkStyles = getLinkClassNames(style, variant);

	console.log('==> ', linkStyles);

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
