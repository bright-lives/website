import {InnerBlocks, RichText, useBlockProps} from "@wordpress/block-editor";

export default function save({ attributes }) {

  const { title, amountOfColumns } = attributes;

  const blockProps = useBlockProps.save({
    className: `container mx-auto ${attributes.title ? 'pt-24' : ''}`,
  });

  const gridColsClass = `md:grid-cols-${amountOfColumns}`;

  return (
    <section {...blockProps}>
      {attributes.title && (
        <div className="flex mb-6 px-8 sm:px-0">
          <div className="grid grid-cols-1 md:grid-cols-2">
            <RichText.Content
              tagName="h2"
              className="text-4xl leading-normal font-serif mb-6"
              value={title}
            />
          </div>
        </div>
      )}
      <div className={`grid grid-cols-1 ${gridColsClass}`}>
        <InnerBlocks.Content/>
      </div>
    </section>
  )
}
