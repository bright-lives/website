import { __ } from '@wordpress/i18n';
import {RichText, useBlockProps} from '@wordpress/block-editor';
import {style} from './style';

export default function edit({ attributes, setAttributes }) {

	const blockProps = useBlockProps();

	return (
		<div { ...blockProps }>
			<section className={style.container}>
				<div className={style.column}>
					<RichText
						tagName="h2"
						className={style.title}
						value={attributes.title}
						onChange={(title) => setAttributes({title})}
						placeholder={ __( 'Add a title', 'my-awesome-theme' ) }
					/>
					<RichText
						tagName="p"
						className={style.intro}
						value={attributes.intro}
						onChange={(intro) => setAttributes({intro})}
						placeholder={ __( 'Add a title', 'my-awesome-theme' ) }
					/>
				</div>
			</section>
		</div>
	);
}
