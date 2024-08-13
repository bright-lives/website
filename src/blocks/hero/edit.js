import { __ } from '@wordpress/i18n';

import {useBlockProps, RichText, InnerBlocks} from '@wordpress/block-editor';
import {style} from "./style";

export default function Edit({ attributes, setAttributes }) {

	const blockProps = useBlockProps({
		className: style.heroWrapper,
	});

	const handleTitleChange = (newTitle) => {
		setAttributes({ title: newTitle })
	}

	return (
		<div { ...blockProps }>
			<RichText
				tagName="p"
				data-id="hero-title"
				className="mt-10"
				value={ attributes.title }
				allowedFormats={[ 'core/bold', 'core/italic' ]}
				onChange={handleTitleChange}
				placeholder={ __( 'Heading...' ) }
			/>
			<InnerBlocks
				allowedBlocks={ [ 'core/heading', 'core/paragraph', 'core/list' ] }
				template={ [
					[ 'core/heading', { placeholder: 'Example Title...' } ],
					[ 'core/paragraph', { placeholder: 'Example text goes here...' } ]
				]}
			/>
		</div>
	);
}
