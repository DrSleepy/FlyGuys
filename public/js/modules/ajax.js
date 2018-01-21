export default {
  post: async function(url, body) {
    let formData;
    const bodyIsForm = body.constructor.name === 'FormData';

    // both formDataObject/regularObject take in 'body' and return a PHP-readable array
    bodyIsForm ? (formData = formDataObject(body)) : (formData = regularObject(body));

    // Forming HTTP details
    const request = {
      method: 'POST',
      body: formData
    };

    const response = await fetch(url, request);
    return response.text(); // returns promise
  }
};

// takes in formData object and returns PHP-readable formData
const formDataObject = formObj => {
  const formData = new FormData();
  for (const att of formObj) {
    const key = att[0];
    const value = att[1];
    formData.append(key, value);
  }
  return formData;
};

// takes in regular object and returns it as a PHP-readable array
const regularObject = obj => {
  const formData = new FormData();
  for (const att in obj) {
    formData.append(att, obj[att]);
  }
  return formData;
};
