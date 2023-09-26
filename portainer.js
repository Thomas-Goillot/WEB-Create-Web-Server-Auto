const apiUrl = "https://admin.web.thomasgllt.fr/api/auth";

fetch(apiUrl, {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        username: 'admin',
        password: 'TH44go28&*+adminweb'
    })
})
.then(response => response.json())
.then(data => console.log(data))
.catch(error => console.error(error));
