import {RichText} from "@wordpress/block-editor";
import {commonStyle} from "../__components__/common-style";

export default function save({ attributes }) {
  return (
    <article className="container mx-auto py-24 grid grid-cols-1 md:grid-cols-2 px-8 sm:px-0">
      <div className="max-w-lg">
        <RichText.Content
          tagName="h2"
          className={commonStyle.headings.section}
          value={attributes.title}
        />
        <RichText.Content
          tagName="p"
          value={attributes.content}
        />
      </div>
      <div>
        <div className="grid grid-cols-2 gap-4 mt-8 sm:mt-0">
          {attributes.items.map((item) => (
            <div className="flex flex-col mb-5 pb-5 gap-x-4 border-b-2 border-primary-500">
              <div className="text-6xl font-black text-primary-500 leading-tight">
                {item.amount}
              </div>
              <span className="font-medium">
                {item.title}
              </span>
            </div>
          ))}
        </div>
      </div>
    </article>
  );
}
