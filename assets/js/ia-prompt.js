const prompt = "Hello, how are you?";
const model = "gpt-3.5-turbo";
const url = "https://chatgpt-api.shn.hk/v1/";

fetch(url, {
    method: "POST",
    headers: {
        "Content-Type": "application/json"
    },
    body: JSON.stringify({
        model: model,
        messages: [{ role: "user", content: prompt }]
    })
})
    .then(response => response.json())
    .then(data => {
        console.log(data[0].content); // logs the generated response
    })
    .catch(error => {
        console.error(error);
    });
