import { __ } from '@wordpress/i18n';
import {InnerBlocks, RichText, useBlockProps, useInnerBlocksProps} from '@wordpress/block-editor';
import {style} from "../column/style";

export default function edit({ attributes, setAttributes }) {

	const ALLOWED_BLOCKS = [
		'bright-lives/progress-bar',
		'bright-lives/button'
	];
	const INNER_BLOCK_TEMPLATE = [
		['bright-lives/progress-bar'],
		['bright-lives/button', { style: 'outline', variant: 'inverted' }]
	];

	const blockProps = useBlockProps({
			className: 'w-full',
	});
	const innerBlockProps = useInnerBlocksProps();

	return (
		<article {...blockProps}>
			<RichText
				tagName="h3"
				className={style.title}
				value={attributes.title}
				onChange={(title) => setAttributes({title})}
				placeholder={__('Enter title here', 'custom-gutenberg-blocks')}
			/>
			<RichText
				tagName="p"
				className={style.description}
				value={attributes.description}
				onChange={(description) => setAttributes({description})}
				placeholder={__('Enter description here', 'custom-gutenberg-blocks')}
			/>
			<div {...innerBlockProps}>
				<InnerBlocks
					allowedBlocks={ALLOWED_BLOCKS}
					template={INNER_BLOCK_TEMPLATE}
					templateLock={true}
				/>
			</div>
		</article>
	);
}
