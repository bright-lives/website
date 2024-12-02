export const style = {
  heroWrapper: 'bg-amber-200',
  heroTitleContainerFullScreen: 'container my-auto flex h-full items-center',
  heroTitleContainerFixedHeight: 'container my-auto flex h-full items-end',
  heroTitle: 'text-white text-4xl lg:text-7xl !leading-normal font-display',
  imageContainer: 'bg-radial-gradient-opacity min-h-[430px]',
  imageContainerHeightFull: 'h-screen',
  imageContainerHeightFixed: 'h-60vh max-h-[500px]',
  image: 'h-full',
};

export const styleHeightMap = {
  'full': style.imageContainerHeightFull,
  'fixed': style.imageContainerHeightFixed,
};
