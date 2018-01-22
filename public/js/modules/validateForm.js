export default async (url, formInfo) => {
  // Ajax call
  const init = {
    method: 'POST',
    body: formInfo
  };
  const response = await fetch(url, init);
  const textResponse = await response.text();
  return JSON.parse(textResponse);
};
