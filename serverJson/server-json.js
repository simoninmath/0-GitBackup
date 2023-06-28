const express=require('express');
let bodyParser=require('body-parser');
let db=require('./connection-mysql');
const cors=require('cors');
const app=express();

///Générer un resultat JSON
app.use(bodyParser.json());
// Définir les autorisation
app.use(cors({origin:'*'}));

//Définition des routes
app.get("/employes",(request,response)=>{
db.query("select * from Employe", function(error, result){
    if(error) throw error;
    else response.send(result);
    })
})

app.get("/employes/:id",(request,response)=>{
    db.query("select * from Employe where id=?", request.params.id, function(error, result){
        if(error) throw error;
        else response.send(result);
        })
    })

// Insérer un Employé
app.post("/employes",(request,response)=>{
    let emp=request.body;
    let empData=[emp.id,emp.nom,emp.sal];
    db.query("insert into Employe values(?)",[empData],function(error, result){
        if(error) throw error;
        else response.send(result);
    })
})

// La suppression par id
app.delete("/employes/:id",(request,response)=>{
    db.query("delete from Employe where id=?", request.params.id, function(error, result){
        if(error) throw error;
        else response.send(result);
        })
    })

app.patch("/employes",(request,response)=>{
    let emp=request.body;
    db.query(`update Employe set ? where id=${request.body.id}`,emp,function(error, result){
        if(error) throw error;
        else response.send(result);
    })
})
// Définition du port
app.listen(8787,()=>{console.log('server Connected')});