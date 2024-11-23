import { __ } from '@wordpress/i18n';

import {InnerBlocks, MediaUpload, RichText, useBlockProps, useInnerBlocksProps} from '@wordpress/block-editor';
import {Button, Flex, FlexItem, IconButton, Placeholder} from '@wordpress/components';
import {edit, trash, image} from '@wordpress/icons';

export default function Edit({ attributes, setAttributes }) {

	const ALLOWED_MEDIA_TYPES = ['image'];
	const ALLOWED_BLOCKS = ['bright-lives/button'];
	const INNER_BLOCK_TEMPLATE = ['bright-lives/button', { style: 'outline' }];

	const blockProps = useBlockProps();
	const innerBlockProps = useInnerBlocksProps();

	const onRemoveImage = () => {
		setAttributes({ imageUrl: '', imageAlt: '' });
	};

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
						className="mb-4"
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
					{attributes.imageUrl ? (
						<div className="grid grid-cols-1 grid-rows-1">
							<div className="col-start-1 row-start-1 flex justify-end">
								<MediaUpload
									onSelect={(media) => setAttributes({ imageUrl: media.url, imageAlt: media.alt })}
									allowedTypes={ALLOWED_MEDIA_TYPES}
									render={({ open }) => (
										<>
											<IconButton
												icon={edit}
												label={__('Edit image', 'custom-gutenberg-blocks')}
												onClick={open}
											/>
											<IconButton
												icon={trash}
												label={__('Remove image', 'custom-gutenberg-blocks')}
												onClick={onRemoveImage}
											/>
										</>
									)}
								/>
							</div>
							<img src={attributes.imageUrl} alt={attributes.imageUrl} className="col-start-1 row-start-1 w-full"/>
						</div>
					) : (
						<MediaUpload
							onSelect={(media) => setAttributes({
								imageUrl: media.url,
								imageAlt: media.alt,
							})}
							allowedTypes={ALLOWED_MEDIA_TYPES}
							render={({open}) => (
								<Placeholder icon={image} label={__('Image', 'custom-gutenberg-blocks')}>
									<Button variant="primary" onClick={open}>
										{__('Open Media Library', 'custom-gutenberg-blocks')}
									</Button>
								</Placeholder>
							)}
						/>
					)}
				</FlexItem>
			</Flex>
		</div>
	);
}
