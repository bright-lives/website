import { __ } from '@wordpress/i18n';

import {BlockControls, InnerBlocks, RichText, useBlockProps, useInnerBlocksProps} from '@wordpress/block-editor';
import {Flex, FlexItem, Toolbar, ToolbarButton, ToolbarGroup} from '@wordpress/components';
import {MediaUploader} from "../__components__/MediaUploader/MediaUploader";
import {color} from "@wordpress/icons";
import {imageRight, imageLeft} from "./assets/icons";
import {style} from "./style";

export default function Edit({ attributes, setAttributes }) {

	const ALLOWED_MEDIA_TYPES = ['image'];
	const ALLOWED_BLOCKS = ['bright-lives/button'];
	const INNER_BLOCK_TEMPLATE = [];

	const blockProps = useBlockProps({
		className: `py-8 ${attributes.backgroundGradient ? style.backgroundGradient : ''}`,
	});
	const innerBlockProps = useInnerBlocksProps();

	const onRemoveImage = () => {
		setAttributes({ imageUrl: '', imageAlt: '' });
	};

	const onSelectImage = (media) => {
		setAttributes({ imageUrl: media.url, imageAlt: media.alt })
	}

	const toggleBackgroundGradient = () => {
		setAttributes({ backgroundGradient: !attributes.backgroundGradient });
	}

	const isOrientationNormal = attributes.orientation === 'normal';
	const isOrientationReversed = attributes.orientation === 'reversed';
	const isBackgroundGradientActive = !!attributes.backgroundGradient;

	return (
		<div {...blockProps}>
			<Flex direction={isOrientationReversed ? 'row-reverse' : 'row'}>
				<FlexItem className={`w-1/2 ${isOrientationReversed ? 'px-20' : ''}`}>
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
							template={INNER_BLOCK_TEMPLATE}
							templateLock={false}
						/>
					</div>
				</FlexItem>
				<FlexItem className="w-1/2">
					<MediaUploader
						imageUrl={attributes.imageUrl}
						onSelectImage={onSelectImage}
						onRemoveImage={onRemoveImage}
						allowedMediaTypes={ALLOWED_MEDIA_TYPES}
					/>
				</FlexItem>
			</Flex>
			<BlockControls>
				<Toolbar>
					<ToolbarGroup label="Orientation">
						<ToolbarButton icon={ imageRight } label="Normal" onClick={() => setAttributes({orientation: 'normal'})} isActive={isOrientationNormal} />
						<ToolbarButton icon={ imageLeft } label="Reversed" onClick={() => setAttributes({orientation: 'reversed'})} isActive={isOrientationReversed} />
					</ToolbarGroup>
				</Toolbar>
				<Toolbar>
					<ToolbarGroup label="Background gradient">
						<ToolbarButton icon={ color } label="Background gradient" onClick={toggleBackgroundGradient} isActive={isBackgroundGradientActive} />
					</ToolbarGroup>
				</Toolbar>
			</BlockControls>
		</div>
	);
}
