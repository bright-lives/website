/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {MediaUpload, RichText, useBlockProps} from '@wordpress/block-editor';
import {Button, Flex, FlexItem, Placeholder} from '@wordpress/components';
import {image} from '@wordpress/icons';
import {style} from "./style";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {

	const blockProps = useBlockProps({
		className: style.sectionHighlightWrapper,
	});

	const ALLOWED_MEDIA_TYPES = ['image'];

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
				</FlexItem>
				<FlexItem className="w-1/3">
					<MediaUpload
						onSelect={(media) => setAttributes({imageUrl: media.url})}
						allowedTypes={ ALLOWED_MEDIA_TYPES }
						render={({open}) => (
							<Placeholder icon={image} label={__('Image', 'custom-gutenberg-blocks')}>
								<Button
									variant="primary"
									onClick={ open }
								>{__('Open Media Library', 'custom-gutenberg-blocks')}</Button>
							</Placeholder>
						)}
					/>
				</FlexItem>
			</Flex>
		</div>
	);
}
