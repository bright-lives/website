import {style} from "./style";
import {InnerBlocks, RichText} from "@wordpress/block-editor";

export default function save({ attributes }) {
  return (
    <section className={`${style.section.className} px-8 sm:px-0`}>
      <div className={style.container.className}>
        <RichText.Content
          tagName="h2"
          className={style.title.className}
          value={attributes.title}
        />
        <RichText.Content
          tagName="p"
          className={style.subTitle.className}
          value={attributes.subTitle}
        />
        <div className={style.buttonContainer.className}>
          <InnerBlocks.Content />
        </div>
      </div>
    </section>
  );
}