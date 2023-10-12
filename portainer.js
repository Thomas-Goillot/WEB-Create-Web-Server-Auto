const apiUrl = "https://admin.web.thomasgllt.fr/api/stacks";

fetch(apiUrl, {
    method: 'POST',
    headers: {
        'X-API-KEY': 'ptr_MaYlWgiOW/5ebmCVYV4x6Mdv92DOe0jhx62AEoph+bA='
    },

})
.then(response => response.json())
.then(data => console.log(data))
.catch(error => console.error(error));
