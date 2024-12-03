import {InnerBlocks, RichText, useBlockProps} from "@wordpress/block-editor";
import {style} from "./style";

export default function save({ attributes }) {
  const { title, content, index, parentHasAmountOfColumns } = attributes;

  const blockProps = useBlockProps.save({
    className: `p-10 ${style.getColumnBackgroundColor(parentHasAmountOfColumns, index)}`,
  });

  const titleSize = parentHasAmountOfColumns === 5 ? "text-xl" : "text-2xl";

  return (
    <article {...blockProps}>
      <div className={style.titleContainer}>
        <RichText.Content
          tagName="h3"
          className={`${titleSize} ${style.title} mb-4`}
          value={title}
        />
      </div>
      <div className={style.contentContainer}>
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
