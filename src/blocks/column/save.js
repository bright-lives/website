import {InnerBlocks, RichText, useBlockProps} from "@wordpress/block-editor";
import {style} from "./style";

export default function save({ attributes }) {
  const { title, content } = attributes;

  const blockProps = useBlockProps.save({
    className: style.getUpdatedColumnStyle(attributes.index),
  });

  return (
    <article {...blockProps}>
      <div className="h-28">
        <RichText.Content
          tagName="h3"
          className="text-2xl font-heading text-white mb-4"
          value={title}
        />
      </div>
      <div className="h-48">
        <RichText.Content
          tagName="p"
          className="text-white"
          value={content}
        />
      </div>
      <InnerBlocks.Content />
    </article>
  )
}
