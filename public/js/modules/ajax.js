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

    try {
      const phpResponse = await fetch(url, request);
      return phpResponse.text(); //Returns promise
    } catch (err) {
      console.log(err);
    }
  }
};
