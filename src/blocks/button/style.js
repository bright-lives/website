
const iconAnimation = 'transition-all duration-300 ease-in-out group-hover:pl-4';

export const style = {
  defaultStyles: 'group inline-flex w-auto min-w-56 font-serif',
  stylesMap: {
    fill: {
      normal: 'p-4 border-2 text-white fill-white bg-primary-500 border-primary-500 hover:text-primary-500 hover:fill-primary-500 hover:bg-white hover:border-white',
      inverted: 'p-4 border-2 text-primary-500 fill-primary-500 bg-white border-white hover:text-white hover:fill-white hover:bg-primary-500 hover:border-primary-500',
    },
    outline: {
      normal: 'p-4 border-2 text-black fill-black border-black hover:text-primary-500 hover:fill-text-primary-500 hover:border-primary-500',
      inverted: 'p-4 border-2 text-white fill-white border-white hover:text-primary-500 hover:fill-primary-500 hover:border-primary-500',
    },
    text: {
      normal: 'py-4 text-primary-500 fill-primary-500 hover:text-primary-800 hover:fill-primary-800',
      inverted: 'py-4 text-white fill-white underline hover:text-white hover:fill-white hover:no-underline',
    }
  },
  textContainer: 'flex',
  iconContainer: 'flex pl-2 items-center' + iconAnimation,
};
