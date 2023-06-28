// Utilisation d'une API Météo

async function getMeteo(){
    const params={
        key:"8522a3ec2ff7f51e05ff84185cf60873",
        country:"Lyon"
    }

    try {
        const url=`http://api.weatherstack.com/current?access_key=${params.key}&query=${params.country}`;
        console.log(url);
        let response=await fetch(url);
        let data=await response.json();
        console.log(data);
        }
    catch (error){
        console.log(error);
    }
}

getMeteo();
console.log("Programme Principal");