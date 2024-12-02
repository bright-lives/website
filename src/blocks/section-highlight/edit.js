import { __ } from '@wordpress/i18n';

import {InnerBlocks, RichText, useBlockProps, useInnerBlocksProps} from '@wordpress/block-editor';
import {Flex, FlexItem} from '@wordpress/components';
import {MediaUploader} from "../__components__/MediaUploader/MediaUploader";

export default function Edit({ attributes, setAttributes }) {

	const ALLOWED_MEDIA_TYPES = ['image'];
	const ALLOWED_BLOCKS = ['bright-lives/button'];
	const INNER_BLOCK_TEMPLATE = ['bright-lives/button', { style: 'outline' }];

	const blockProps = useBlockProps();
	const innerBlockProps = useInnerBlocksProps();

	const onRemoveImage = () => {
		setAttributes({ imageUrl: '', imageAlt: '' });
	};

	const onSelectImage = (media) => {
		setAttributes({ imageUrl: media.url, imageAlt: media.alt })
	}

	return (
		<div {...blockProps}>
			<Flex>
				<FlexItem className="w-2/3">
					<RichText
						tagName="h2"
						className="mb-4 text-2xl"
						value={attributes.title}
						onChange={(title) => setAttributes({title})}
						placeholder={__('Enter title here', 'custom-gutenberg-blocks')}
					/>
					<RichText
						tagName="p"
						className="mb-6"
						value={attributes.content}
						onChange={(content) => setAttributes({content})}
						placeholder={__('Enter content here', 'custom-gutenberg-blocks')}
					/>
					<div {...innerBlockProps}>
						<InnerBlocks
							allowedBlocks={ALLOWED_BLOCKS}
							template={[INNER_BLOCK_TEMPLATE]}
							templateLock="all"
						/>
					</div>
				</FlexItem>
				<FlexItem className="w-1/3">
					<MediaUploader
						imageUrl={attributes.imageUrl}
						onSelectImage={onSelectImage}
						onRemoveImage={onRemoveImage}
						allowedMediaTypes={ALLOWED_MEDIA_TYPES}
					/>
				</FlexItem>
			</Flex>
		</div>
	);
}
