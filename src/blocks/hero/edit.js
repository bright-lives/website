import { __ } from '@wordpress/i18n';

import { useBlockProps } from '@wordpress/block-editor';
import {getBlockClasses} from "./get-block-classes";

export default function Edit() {

	const blockProps = useBlockProps({
		className: getBlockClasses(),
	});

	return (
		<p { ...blockProps }>
			{ __( 'Hero – hello from the editor!', 'hero' ) }
		</p>
	);
}
