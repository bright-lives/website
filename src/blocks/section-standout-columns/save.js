import {InnerBlocks, RichText, useBlockProps} from "@wordpress/block-editor";
import {commonStyle} from "../__components__/common-style";
import {style} from "./style";

export default function save({ attributes }) {

  const { title, amountOfColumns } = attributes;

  const blockProps = useBlockProps.save({
    className: `container mx-auto ${attributes.title ? 'pt-24' : ''}`,
  });

  const gridAmountOfCols = `md:grid-cols-${amountOfColumns}`;

  return (
    <section {...blockProps}>
      {attributes.title && (
        <div className="flex mb-6 px-8 sm:px-0">
          <div className="grid grid-cols-1 md:grid-cols-2">
            <RichText.Content
              tagName="h2"
              className={commonStyle.headings.section}
              value={title}
            />
          </div>
        </div>
      )}
      <div className={`grid grid-cols-1 ${gridAmountOfCols} ${style.columnsContainer}`}>
        <InnerBlocks.Content/>
      </div>
    </section>
  )
}
