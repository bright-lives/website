export const style = {
  heroWrapper: 'bg-amber-200',
  heroTitleContainer: 'container mx-auto flex h-full px-10 md:px-0',
  heroTitleContainerFullScreen: 'items-center',
  heroTitleContainerFixedHeight: 'items-end',
  heroTitle: 'text-white text-4xl lg:text-5xl xxl:text-6xl !leading-normal font-display',
  imageContainer: 'bg-radial-gradient-opacity min-h-[430px]',
  imageContainerHeightFull: 'h-screen',
  imageContainerHeightFixed: 'h-60vh max-h-[500px]',
  image: 'h-full',
};

export const styleHeightMap = {
  'full': style.imageContainerHeightFull,
  'fixed': style.imageContainerHeightFixed,
};

export const styleTitleMap = {
  'full': style.heroTitleContainerFullScreen,
  'fixed': style.heroTitleContainerFixedHeight,
}
