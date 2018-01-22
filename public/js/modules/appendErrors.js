export default (errors, ids) => {
  ids.map(current => {
    const element = document.querySelector(current);
    const elementId = element.id;
    const elementInput = document.querySelector(`input[name="${elementId}"]`);
    const error = errors[elementId][0];

    if (error) {
      element.innerHTML = error;
      elementInput.classList.add('error-input');
    } else {
      element.innerHTML = '';
      elementInput.classList.remove('error-input');
    }
  });
};
