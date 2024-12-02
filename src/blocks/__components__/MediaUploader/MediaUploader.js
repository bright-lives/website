import {__} from "@wordpress/i18n";
import {MediaUpload} from "@wordpress/block-editor";
import {Button, IconButton, Placeholder} from "@wordpress/components";
import {image, trash, edit} from "@wordpress/icons";
import {mediaUploaderStyle} from "./style";

export const MediaUploader = ({ imageUrl, onSelectImage, onRemoveImage, allowedMediaTypes, imageOverlay = false }) => {
  return (imageUrl ? (
      <div className="grid [grid-template-areas:'stack'] min-h-72 h-full w-full">
        <div className="[grid-area:stack] z-40">
          <div className="flex justify-end m-2">
            <MediaUpload
              onSelect={onSelectImage}
              allowedTypes={allowedMediaTypes}
              render={({open}) => (
                <>
                  <IconButton
                    icon={edit}
                    label={__('Edit image', 'custom-gutenberg-blocks')}
                    onClick={open}
                    className="bg-white/50"
                  />
                  <IconButton
                    icon={trash}
                    label={__('Remove image', 'custom-gutenberg-blocks')}
                    onClick={onRemoveImage}
                    className="bg-white/50"
                  />
                </>
              )}
            />
          </div>
        </div>
        {imageOverlay && (
          <div className="[grid-area:stack] inset-0 bg-radial-gradient-opacity z-10"/>
        )}
        <div className="[grid-area:stack] z-0" style={mediaUploaderStyle.getBackgroundCoverImage(imageUrl)} />
      </div>
    ) : (
      <MediaUpload
        onSelect={onSelectImage}
        allowedTypes={allowedMediaTypes}
        render={({ open }) => (
          <Placeholder icon={image} label={__('Image', 'custom-gutenberg-blocks')}>
            <Button variant="primary" onClick={open}>
              {__('Open Media Library', 'custom-gutenberg-blocks')}
            </Button>
          </Placeholder>
        )}
      />
    )
  );
};
