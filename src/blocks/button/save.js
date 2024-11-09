import { useBlockProps } from '@wordpress/block-editor';

export default function save({attributes}) {

	const defaultStyles = 'p-4 inline-flex w-auto min-w-56 border-2 font-serif';

	const { style, variant, text } = attributes;

	const stylesMap = {
		fill: {
			normal: 'text-white bg-primary-500 border-primary-500 hover:text-primary-500 hover:bg-white hover:border-white',
			inverted: 'text-primary-500 bg-white border-white hover:text-white hover:bg-primary-500 hover:border-primary-500',
		},
		outline: {
			normal: 'text-black border-black hover:text-primary-500 hover:border-primary-500',
			inverted: 'text-white border-white hover:text-primary-500 hover:border-primary-500',
		},
	};

	const buttonStyles = stylesMap[style]?.[variant] || '';

	const blockProps = useBlockProps.save({
		className: defaultStyles + ' ' + buttonStyles,
	});

	return (
		<button { ...blockProps }>
			{ text }
		</button>
	);
}
