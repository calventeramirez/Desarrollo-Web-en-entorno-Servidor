var express = require('express');
var router = express.Router();
const { MongoClient } = require("mongodb");

const uri = "mongodb://localhost:27017";
const client = new MongoClient(uri);
const database = client.db("superheroes");
const superpoderesCollection = database.collection("superpoderes");

/* GET home page. */
router.get('/', async (req, res, next) => {
    // let arraySuperheroes = [
    //     "Superman",
    //     "Mr Increibles",
    //     "Flash",
    //     "Homelander",
    //     "Viuda Negra"
    // ];
    let superpoderes = getAllSuperpoderes();
  res.render('superheroes/index', { title: 'Superheroes', superheroes: await superpoderes });
});

async function getAllSuperpoderes(){
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

module.exports = router;
