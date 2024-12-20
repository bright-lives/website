import {useBlockProps, RichText} from '@wordpress/block-editor';
import {InnerBlocks} from '@wordpress/block-editor';
import {commonStyle} from "../__components__/common-style";
import {style} from "./style";

export default function save({ attributes }) {
	const { title, content, imageUrl, imageAlt, orientation } = attributes;

	const blockProps = useBlockProps.save({
		className: attributes.backgroundGradient ? style.backgroundGradient : '',
	});

	const isOrientationReversed = orientation === 'reversed';
	const reverseColumns = isOrientationReversed ? 'md:order-2 md:px-20' : '';

	return (
		<section {...blockProps}>
			<article className={`container mx-auto grid grid-cols-1 md:grid-cols-2`}>
				<div className={`flex items-center sm:px-10 sm:py-20 md:py-0 md:pt-14 md:pl-0 md:pr-10 ${reverseColumns}`}>
					<div className={`font-sans-serif max-w-lg py-20 sm:pt-0 px-8 sm:px-0`}>
						<RichText.Content
							tagName="h2"
							className={commonStyle.headings.section}
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
				<div className={`flex md:mt-16 ${isOrientationReversed ? 'md:order-1' : ''}`}>
					<img src={imageUrl} alt={imageAlt} className={`md:mt-auto`} />
				</div>
			</article>
		</section>
	);
}
