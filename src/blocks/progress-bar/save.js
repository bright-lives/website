import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {

	const { start, end, current } = attributes;

	const blockProps = useBlockProps.save({
		className: 'w-full max-w-lg mb-20',
	});

	return (
		<div {...blockProps}>
			<div className="bg-gray-300 rounded-full h-4">
				<div className="bg-amber-400 h-4 rounded-full animate-pulse" style={'width: ' + current + '%;'}></div>
				<div className="flex justify-between my-2">
					<span className="text-white">€ {start}</span>
					<span className="text-white">€ {end}</span>
				</div>
			</div>
		</div>
	);
}
