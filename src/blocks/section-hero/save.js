import { __ } from '@wordpress/i18n';
import {useBlockProps, RichText} from "@wordpress/block-editor";
import {style, styleHeightMap} from "./style";

export default function Save({attributes}) {
  const { heroTitle, height } = attributes;

  const blockProps = useBlockProps.save({
    className: `${style.heroWrapper} grid [grid-template-areas:'stack']`,
    style: style.getBackgroundImageStyle(attributes.imageUrl),
  });

  return (
    <section {...blockProps}>
      <div className="[grid-area:stack] z-20">
        <div className={style.heroTitleContainer}>
          <RichText.Content
            tagName="p"
            data-id="hero-title"
            className={style.heroTitle}
            value={heroTitle}
            placeholder={__('Heading...', 'custom-gutenberg-blocks')}
          />
        </div>
      </div>
      <div className="[grid-area:stack] bg-radial-gradient-opacity z-10"/>
      <div className="[grid-area:stack] z-0">
        <div className={`${style.imageContainer} ${styleHeightMap[height]}`}/>
      </div>
    </section>
  );
}