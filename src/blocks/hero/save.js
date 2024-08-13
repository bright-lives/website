import { __ } from '@wordpress/i18n';
import {useBlockProps, useInnerBlocksProps, RichText} from "@wordpress/block-editor";
import {style} from "./style";

export default function Save({attributes}) {
  const { title } = attributes;

  const blockProps = useBlockProps.save({
    className: style.heroWrapper,
  });
  const innerBlocksProps = useInnerBlocksProps.save();

  return (
    <div { ...blockProps }>
      <RichText.Content
        tagName="p"
        data-id="hero-title"
        className="mt-10"
        value={ title }
        placeholder={ __( 'Heading...' ) }
      />
      <div {...innerBlocksProps} />
    </div>
  );
}