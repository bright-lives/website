import {useBlockProps, RichText} from '@wordpress/block-editor';
import {InnerBlocks} from '@wordpress/block-editor';

export default function save({ attributes }) {
	const { title, content, imageUrl, imageAlt } = attributes;

	const blockProps = useBlockProps.save({
		className: 'bg-radial-gradient',
	});

	return (
		<section {...blockProps}>
			<article className='container mx-auto grid grid-cols-1 md:grid-cols-2'>
				<div className="flex items-center">
					<div className="font-sans-serif max-w-lg pt-20 sm:pt-0 px-8 sm:px-0">
						<RichText.Content
							tagName="h2"
							className="text-4xl leading-normal font-serif mb-6"
							value={title}
						/>
						<RichText.Content
							tagName="p"
							className="mb-8"
							value={content}
						/>
						<InnerBlocks.Content />
					</div>
				</div>
				<div className="pt-24">
					<img src={imageUrl} alt={imageAlt} />
				</div>
			</article>
		</section>
	);
}
