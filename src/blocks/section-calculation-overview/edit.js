import { __ } from '@wordpress/i18n';
import {InnerBlocks, RichText, useBlockProps, useInnerBlocksProps} from '@wordpress/block-editor';
import {style} from "./style";

export default function edit({ attributes, setAttributes }) {

	const INNER_BLOCK_TEMPLATE = ['bright-lives/table-calculation'];

	const blockProps = useBlockProps({
		className: style.sectionContainer,
	});

	const innerBlockProps = useInnerBlocksProps();

	const onChangeTitle = (newTitle) => {
		setAttributes({ title: newTitle });
	};

	return (
		<div { ...blockProps }>
			<div className={style.container}>
				<div className={style.firstColumnContainer}>
					<RichText
						tagName="h2"
						placeholder={__('Title', 'custom-gutenberg-blocks')}
						className={style.title}
						value={attributes.title}
						onChange={onChangeTitle}
					/>
					<div {...innerBlockProps}>
						<InnerBlocks
							template={[INNER_BLOCK_TEMPLATE]}
							templateLock="all"
						/>
					</div>
				</div>
			</div>
		</div>
	);
}
