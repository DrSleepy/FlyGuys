const logoutMobile = async () => {
  const init = {
    method: 'GET',
    credentials: 'same-origin'
  };
  const response = await fetch('/Login/logoutUser', init);
  const loggedOut = await response.text();

  if (loggedOut) {
    window.location.replace('/')
  }
}

const logoutElement = document.querySelector('#logoutMobile');
if (logoutElement) {
  logoutElement.addEventListener('click', logoutMobile);
}
