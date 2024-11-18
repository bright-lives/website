import { __ } from '@wordpress/i18n';
import {useBlockProps, useInnerBlocksProps, RichText} from "@wordpress/block-editor";
import {style} from "./style";

export default function Save({attributes}) {
  const { heroTitle, imageUrl, imageAlt, height } = attributes;

  const styleHeightMap = {
    'full': style.imageContainerHeightFull,
    'fixed': style.imageContainerHeightFixed,
  }

  const blockProps = useBlockProps.save({
    className: `${style.heroWrapper} ${styleHeightMap[height]} grid [grid-template-areas:'stack']`,
  });

  return (
    <div {...blockProps}>
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
      <div className="[grid-area:stack] inset-0 bg-radial-gradient-opacity z-10" />
      <div className="[grid-area:stack] z-0">
        <div className={style.imageContainer}>
          <img src={imageUrl} alt={imageAlt}/>
        </div>
      </div>
    </div>
  );
}