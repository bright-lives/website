import {useBlockProps, RichText, useInnerBlocksProps} from '@wordpress/block-editor';
import { InnerBlocks } from '@wordpress/block-editor';

export default function save({ attributes }) {
	const { title, content, imageUrl, imageAlt } = attributes;

	const blockProps = useBlockProps.save({
		className: 'bg-radial-gradient',
	});

	// const innerBlocksProps = useInnerBlocksProps.save();

	return (
		<div {...blockProps}>
			<article className='container mx-auto grid grid-cols-1 md:grid-cols-2'>
				<div className="flex items-center">
					<div className="font-sans-serif max-w-lg">
						<RichText.Content
							tagName="h2"
							className="text-4xl leading-normal font-serif mb-6"
							value={title}
						/>
						<RichText.Content
							tagName="p"
							className="mb-4"
							value={content}
						/>
						<InnerBlocks.Content />
					</div>
				</div>
				<div className="pt-24">
					<img src={imageUrl} alt={imageAlt} />
				</div>
			</article>
		</div>
	);
}
