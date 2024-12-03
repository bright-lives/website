import { __ } from '@wordpress/i18n';
import {BlockControls, RichText, useBlockProps} from '@wordpress/block-editor';
import {
	Icon,
	Popover,
	Toolbar,
	ToolbarButton,
	ToolbarGroup
} from "@wordpress/components";
import { useState, useMemo, useRef } from '@wordpress/element';
import {button, styles as stylesIcon, link, linkOff, lineSolid, arrowRight} from "@wordpress/icons";
import {buttonFilled, stylesInverted} from "./assets/icons";
import { __experimentalLinkControl as LinkControl } from "@wordpress/block-editor";
import {getLinkClassNames} from "./utils";
import {style as componentStyle} from './style';
import {displayShortcut} from "@wordpress/keycodes";

export default function Edit({ attributes, setAttributes }) {

	const richTextRef = useRef();

	const { text, style, variant, url } = attributes;

	// Use internal state instead of a ref to make sure that the component
	// re-renders when the popover's anchor updates.
	const [isEditingURL, setIsEditingURL] = useState( false );

	const linkValue = useMemo(
		() => ({url}),
		[url]
	);

	function startEditingURL() {
		setIsEditingURL( (state) => !state);
	}

	function unlink() {
		setAttributes({
			url: undefined,
		});
		setIsEditingURL(false);
	}

	const linkStyles = getLinkClassNames(style, variant);

	return (
		<>
			<div { ...useBlockProps() }>
				<a className={linkStyles}>
					<span className={componentStyle.textContainer}>
						<RichText
							ref={richTextRef}
							tagName="p"
							value={text}
							className="text-sm"
							onChange={(text) => setAttributes({text})}
							allowedFormats={[]}
							placeholder={__('Add text...', 'custom-gutenberg-blocks')}
						/>
					</span>
					<span className={componentStyle.iconContainer}>
						<Icon icon={arrowRight} size="24"></Icon>
					</span>
				</a>
			</div>
			<BlockControls>
				<Toolbar>
					<ToolbarGroup label="Style">
						<ToolbarButton icon={ buttonFilled } label="Fill" onClick={() => setAttributes({style: 'fill'})} isActive={style === 'fill'} />
						<ToolbarButton icon={ button } label="Outline" onClick={() => setAttributes({style: 'outline'})} isActive={style === 'outline'} />
						<ToolbarButton icon={ lineSolid } label="Text" onClick={() => setAttributes({style: 'text'})} isActive={style === 'text'} />
					</ToolbarGroup>
				</Toolbar>
				<Toolbar>
					<ToolbarGroup label="Variant">
						<ToolbarButton icon={ stylesIcon } label="Normal" onClick={() => setAttributes({variant: 'normal'})} isActive={variant === 'normal'} />
						<ToolbarButton icon={ stylesInverted } label="Inverted" onClick={() => setAttributes({variant: 'inverted'})} isActive={variant === 'inverted'} />
					</ToolbarGroup>
				</Toolbar>
				<Toolbar>
					<ToolbarGroup label="Link">
						{!url && (
							<ToolbarButton icon={ link } label="Link" shortcut={ displayShortcut.primary( 'k' ) } onClick={startEditingURL} />
						)}
						{!!url && (
							<ToolbarButton icon={ linkOff } label="Unlink" onClick={startEditingURL} shortcut={ displayShortcut.primaryShift( 'k' ) } isActive />
						)}
					</ToolbarGroup>
				</Toolbar>
			</BlockControls>

			{isEditingURL && (
				<Popover
					placement="bottom"
					onClose={() => {
						setIsEditingURL(false);
						richTextRef.current?.focus();
					}}
					// necessary for it to close when you click outside the popover
					__unstableSlotName="__unstable-block-tools-after"
				>
					<LinkControl
						value={linkValue}
						onChange={(linkValue) => { setAttributes({ url: linkValue.url }); }}
						onRemove={() => {
							unlink();
							richTextRef.current?.focus();
						}}
					></LinkControl>
				</Popover>
			)}
		</>
	);
}
