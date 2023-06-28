function client_api(id) {
    // Définir l"objet XMLHttp pour envoyéer la requête HTTP
    let client=new XMLHttpRequest();
    // Paramétrage de la méthode d'envoi et de l'URL
    client.open('GET', `http://localhost:8787/employes/${id}`);
    client.send();
    client.onload=()=>alert(client.responseText);
}