import {useBlockProps} from '@wordpress/block-editor';
import {__experimentalGrid as Grid} from "@wordpress/components";
import {MediaUploader} from "../__components__/MediaUploader/MediaUploader";

export default function Edit({ attributes, setAttributes }) {

	const ALLOWED_MEDIA_TYPES = ['image'];

	const blockProps = useBlockProps({
		className: 'bg-transparent',
	});

	const onSelectImage = (media, index) => {
		const newImages = [...attributes.images];
		newImages[index] = { url: media.url, alt: media.alt };
		setAttributes({ images: newImages });
	};

	const onRemoveImage = (index) => {
		const newImages = [...attributes.images];
		newImages.splice(index, 1);
		setAttributes({ images: newImages });
	};

	return (
		<div {...blockProps}>
			<Grid columns={ 3 } className="h-[40vh]">
				{attributes.images.map((image, index) => (
					<div key={index}>
						<MediaUploader
							imageUrl={image.url}
							onSelectImage={(media) => onSelectImage(media, index)}
							onRemoveImage={() => onRemoveImage(index)}
							allowedMediaTypes={ALLOWED_MEDIA_TYPES}
						/>
					</div>
				))}
			</Grid>
		</div>
	);
}
