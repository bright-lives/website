import { useBlockProps } from '@wordpress/block-editor';
import {mediaUploaderStyle} from "../__components__/MediaUploader/style";

export default function save({ attributes }) {

  const blockProps = useBlockProps.save({
    className: 'container mx-auto my-20 grid grid-cols-1 gap-10 md:grid-cols-3 bg-transparent',
  });

  return (
    <section { ...blockProps }>
      {attributes.images.map((image) => {
        return (
          <div className="h-60vh" style={mediaUploaderStyle.getBackgroundCoverImage(image.url)} />
        );
      })}
    </section>
  );
}
