// APPROCHE ITERATIVE

function fact(n){
    let i=1; //déclaration des Variables locales
    let f=1;

    for(i=1; i<=n; i++){ // boucle compteur car on connait le nombre d'itération = n
        f*=i; // f=f*i
    }
    return f;
}

console.log(`Fact de 5 = ${fact(5)}`);



// APPROCHE RECURSIVE   

function fact_recursive(n){

    if(n==0) return 1;
    else return fact_recursive(n-1)*n;

}

console.log(`Fact de 10 = ${fact_recursive(10)}`) ;
