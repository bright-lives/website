import { __ } from '@wordpress/i18n';

import {useBlockProps, RichText, BlockControls} from '@wordpress/block-editor';
import {Toolbar, ToolbarButton, ToolbarGroup} from "@wordpress/components";
import {fullScreen, fixedHeight} from "./assets/icons";
import {style, styleTitleMap} from "./style";
import {mediaUploaderStyle} from "../__components__/MediaUploader/style";
import {MediaUploader} from "../__components__/MediaUploader/MediaUploader";

export default function Edit({ attributes, setAttributes }) {

	const ALLOWED_MEDIA_TYPES = ['image'];

	const blockProps = useBlockProps({
		className: style.heroWrapper,
		style: mediaUploaderStyle.getBackgroundCoverImage(attributes.imageUrl),
	});

	const handleTitleChange = (newTitle) => {
		setAttributes({ heroTitle: newTitle })
	}

	const onSelectImage = (media) => setAttributes({imageUrl: media.url, imageAlt: media.alt});

	const onRemoveImage = () => setAttributes({ imageUrl: '', imageAlt: '' });

	const gridClass = attributes.imageUrl === '' ? 'grid-cols-12 gap-4 items-center h-96' : '[grid-template-areas:"stack"]';
	const columnClass = attributes.imageUrl === '' ? 'col-span-6' : '[grid-area:stack] h-[50vh]';

	const heroTitleClass = `${style.heroTitle} ${(attributes.height === 'fixed' ? 'mb-12' : '')}`;

	return (
		<>
			<BlockControls>
				<Toolbar>
					<ToolbarGroup label="Height">
						<ToolbarButton icon={ fullScreen } label="Full height" onClick={() => setAttributes({height: 'full'})} isActive={attributes.height === 'full'} />
						<ToolbarButton icon={ fixedHeight } label="Fixed height" onClick={() => setAttributes({height: 'fixed'})} isActive={attributes.height === 'fixed'} />
					</ToolbarGroup>
				</Toolbar>
			</BlockControls>
			<div { ...blockProps }>
				<div className={`grid ${gridClass}`}>
					<div className={`${columnClass} z-50`}>
						<div className={`${style.heroTitleContainer} ${styleTitleMap[attributes.height]} px-8`}>
							<RichText
								tagName="p"
								data-id="hero-title"
								className={heroTitleClass.replace('text-7xl', 'text-4xl')}
								value={attributes.heroTitle}
								allowedFormats={['core/bold', 'core/italic']}
								onChange={handleTitleChange}
								placeholder={__('Heading...')}
							/>
						</div>
					</div>
					<section className={`${columnClass}`}>
						<MediaUploader
							imageUrl={attributes.imageUrl}
							onSelectImage={onSelectImage}
							onRemoveImage={onRemoveImage}
							allowedMediaTypes={ALLOWED_MEDIA_TYPES}
							imageOverlay={true}
						/>
					</section>
				</div>
			</div>
		</>
	);
}
