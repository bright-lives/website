export const style = {
  heroWrapper: 'bg-amber-200',
  heroTitleContainer: 'container my-auto flex h-full items-center',
  heroTitle: 'text-white text-4xl lg:text-7xl leading-normal font-display pt-20 px-8 sm:px-0',
  imageContainer: 'bg-radial-gradient-opacity min-h-[430px]',
  imageContainerHeightFull: 'h-screen',
  imageContainerHeightFixed: 'h-60vh max-h-[500px]',
  image: 'h-full',
  getBackgroundImageStyle: (imageUrl) => ({
    backgroundImage: `url(${imageUrl})`,
    backgroundSize: 'cover',
    backgroundPosition: 'center',
  }),
};

export const styleHeightMap = {
  'full': style.imageContainerHeightFull,
  'fixed': style.imageContainerHeightFixed,
};
