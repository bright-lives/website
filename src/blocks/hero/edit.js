import { __ } from '@wordpress/i18n';

import {useBlockProps, RichText, MediaUpload, BlockControls} from '@wordpress/block-editor';
import {Button, IconButton, Placeholder, Toolbar, ToolbarButton, ToolbarGroup} from "@wordpress/components";
import {edit, image, trash} from "@wordpress/icons";
import {fullScreen, fixedHeight} from "./assets/icons";
import {style} from "./style";

export default function Edit({ attributes, setAttributes }) {

	const ALLOWED_MEDIA_TYPES = ['image'];

	const blockProps = useBlockProps({
		className: style.heroWrapper,
	});

	const handleTitleChange = (newTitle) => {
		setAttributes({ heroTitle: newTitle })
	}

	const onRemoveImage = () => {
		setAttributes({ imageUrl: '', imageAlt: '' });
	};

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
				<div className="grid [grid-template-areas:'stack']">
					<div className="[grid-area:stack] z-30">
						<div className={`${style.heroTitleContainer} px-8`}>
							<RichText
								tagName="p"
								data-id="hero-title"
								className={style.heroTitle}
								value={attributes.heroTitle}
								allowedFormats={['core/bold', 'core/italic']}
								onChange={handleTitleChange}
								placeholder={__('Heading...')}
							/>
						</div>
					</div>
					<div className="[grid-area:stack]">
						{attributes.imageUrl ? (
							<div className="grid [grid-template-areas:'stack']">
								<div className="[grid-area:stack] z-20">
									<div className="flex justify-end m-2">
										<MediaUpload
											onSelect={(media) => setAttributes({imageUrl: media.url, imageAlt: media.alt})}
											allowedTypes={ALLOWED_MEDIA_TYPES}
											render={({open}) => (
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
								</div>
								<div className="[grid-area:stack] inset-0 bg-radial-gradient-opacity z-10" />
								<div className="[grid-area:stack] z-0">
									<div className={style.imageContainer}>
										<img src={attributes.imageUrl} alt={attributes.imageUrl} className="w-full"/>
									</div>
								</div>
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
					</div>
				</div>
			</div>
		</>
	);
}
