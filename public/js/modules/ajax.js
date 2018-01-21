export default {
  post: async function(url, body) {
    // Forming data into PHP-readable format
    const formData = new FormData();
    for (const att in body) {
      formData.append(att, body[att]);
    }

    // Forming HTTP details
    const request = {
      method: 'POST',
      body: formData
    };

    const response = await fetch(url, request);
    return response.text(); // returns promise
  }
};
