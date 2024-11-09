import { __ } from '@wordpress/i18n';
import {BlockControls, RichText, useBlockProps} from '@wordpress/block-editor';
import {
	Toolbar,
	ToolbarButton,
	ToolbarGroup
} from "@wordpress/components";
import {button, styles as stylesIcon } from "@wordpress/icons";
import {buttonFilled, stylesInverted} from "./assets/icons";

export default function Edit({ attributes, setAttributes }) {

	const { text, style, variant } = attributes;

	return (
		<div { ...useBlockProps() }>
			<BlockControls>
				<Toolbar>
					<ToolbarGroup>
						<ToolbarButton icon={ buttonFilled } label="Fill" onClick={() => setAttributes({style: 'fill'})} isActive={style === 'fill'} />
						<ToolbarButton icon={ button } label="Outline" onClick={() => setAttributes({style: 'outline'})} isActive={style === 'outline'} />
					</ToolbarGroup>
					<ToolbarGroup>
						<ToolbarButton icon={ stylesIcon } label="Normal" onClick={() => setAttributes({variant: 'normal'})} isActive={variant === 'normal'} />
						<ToolbarButton icon={ stylesInverted } label="Inverted" onClick={() => setAttributes({variant: 'inverted'})} isActive={variant === 'inverted'} />
					</ToolbarGroup>
				</Toolbar>
			</BlockControls>

			<RichText
				tagName="p"
				className="mb-4"
				value={text}
				onChange={(text) => setAttributes({text})}
				placeholder={__('Add text...', 'custom-gutenberg-blocks')}
			/>
		</div>
	);
}
