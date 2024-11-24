import {arrowRight} from "@wordpress/icons";
import {useBlockProps} from '@wordpress/block-editor';
import {getLinkClassNames} from "./utils";
import {style as componentStyle} from './style';
import {Icon} from "@wordpress/components";

export default function save({attributes}) {
	const { style, variant, text, url } = attributes;

	const linkStyles = getLinkClassNames(style, variant);

	const blockProps = useBlockProps.save({
		className: linkStyles,
		href: url,
	});

	return (
		<a { ...blockProps }>
			<span className={componentStyle.textContainer}>{ text }</span>
			<span className={componentStyle.iconContainer}>
				<Icon icon={arrowRight} size="24"></Icon>
			</span>
		</a>
	);
}
