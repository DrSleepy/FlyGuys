export default (id, element) => {
  let toggler = document.querySelector(id);
  let toToggle = document.querySelector(element);

  if (toggler === event.target || toggler.contains(event.target)) {
    // if element node is shown, hide it
    toToggle.style.display === 'inline'
      ? (toToggle.style.display = 'none')
      : (toToggle.style.display = 'inline');
  } else {
    // if click is not on id or element nodes, hide element node
    if (
      !toggler === event.target ||
      !toToggle === event.target ||
      !toToggle.contains(event.target)
    ) {
      toToggle.style.display = 'none';
    }
  }
};
