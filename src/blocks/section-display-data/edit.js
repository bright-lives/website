import {__} from "@wordpress/i18n";
import {RichText, useBlockProps} from "@wordpress/block-editor";
import {TextControl} from "@wordpress/components";
import {commonStyle} from "../__components__/common-style";

export default function edit({ attributes, setAttributes }) {

  const blockProps = useBlockProps();

  const updateItem = (index, key, value) => {
    const updatedItems = [...attributes.items];
    updatedItems[index] = { ...updatedItems[index], [key]: value };
    setAttributes({ items: updatedItems });
  };

  return (
    <section {...blockProps}>
      <div className="grid grid-cols-2 gap-4">
        <div>
          <RichText
            tagName="h2"
            className={commonStyle.headings.section}
            value={attributes.title}
            onChange={(title) => setAttributes({title})}
            placeholder={__('Enter title here', 'custom-gutenberg-blocks')}
          />
          <RichText
            tagName="p"
            className=""
            value={attributes.content}
            onChange={(content) => setAttributes({content})}
            placeholder={__('Enter content here', 'custom-gutenberg-blocks')}
          />
        </div>
        <div className="grid grid-cols-2 gap-4">
          {attributes.items.map((item, index) => (
            <div key={index} className="item">
              <TextControl
                label={__('Amount', 'custom-gutenberg-blocks')}
                type="number"
                value={item.amount}
                onChange={(value) => updateItem(index, 'amount', value)}
              />
              <TextControl
                label={__('Title', 'custom-gutenberg-blocks')}
                value={item.title}
                onChange={(value) => updateItem(index, 'title', value)}
              />
            </div>
          ))}
        </div>
      </div>
    </section>
  )
}