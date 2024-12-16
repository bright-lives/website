import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import {TextControl} from "@wordpress/components";

export default function Edit({ attributes, setAttributes }) {

	const blockProps = useBlockProps();

	return (
		<div { ...blockProps }>
			<TextControl
				label={__('Start', 'custom-gutenberg-blocks')}
				type="number"
				value={attributes.start}
				onChange={(value) => setAttributes({ start: value })}
			/>
			<TextControl
				label={__('End', 'custom-gutenberg-blocks')}
				type="number"
				value={attributes.end}
				onChange={(value) => setAttributes({ end: value })}
			/>
			<TextControl
				label={__('Current', 'custom-gutenberg-blocks')}
				type="number"
				value={attributes.current}
				onChange={(value) => setAttributes({ current: value })}
			/>
		</div>
	);
}
