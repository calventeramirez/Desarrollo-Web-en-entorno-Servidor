var express = require('express');
var router = express.Router();
const { MongoClient } = require("mongodb");

const uri = "mongodb://localhost:27017";
const client = new MongoClient(uri);
const database = client.db("superheroes");
const superpoderesCollection = database.collection("superpoderes");

/* GET home page. */
router.get('/', async(req, res, next) => {
    // let arraySuperpoderes = [
    //     {superheroe: "Superman", superpoder: "Volar"},
    //     {superheroe: "Mr Increibles", superpoder:"Superfuerza"},
    //     {superheroe:"Flash", superpoder: "Supervelocidad"},
    //     {superheroe: "Homelander", superpoder: "Visión laser"},
    //     {superheroe:"Viuda Negra", superpoder: "SuperAgilidad"}
    // ];
  let superpoderes = getAllSuperpooderes();

  res.render('superpoderes/index', { title: 'Superpoderes', superpoderes: await superpoderes });
});

async function getAllSuperpooderes(){
  try{

    let query = {};
    let superpoderes = await superpoderesCollection.find(query).toArray();
    console.log(superpoderes);
    return superpoderes;
  }finally{
    //Esto es una guarrada, deberiamos hacer un catch
  }
}

module.exports = router;
