/* eslint-disable no-console */
console.log("Hello World! (from bright-lives-section-highlight block)");
/* eslint-enable no-console */

function useAnchorClasses() {
  const anchors = document.querySelectorAll('p > a');

  anchors.forEach(anchor => {
    const isCustomBlockLink = anchor.classList.contains('wp-block-bright-lives-button');
    if (!isCustomBlockLink) {
      anchor.classList.add('text-primary-500', 'underline', 'underline-offset-4');
    }
  });
}

useAnchorClasses();

