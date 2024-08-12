import { useBlockProps } from '@wordpress/block-editor';
import {getBlockClasses} from "./get-block-classes";

export default function save() {

	const blockProps = useBlockProps.save({
		className: getBlockClasses(),
	});

	return (
		<p { ...blockProps }>
			{ 'Hero – hello from the saved content! foo' }
		</p>
	);
}
