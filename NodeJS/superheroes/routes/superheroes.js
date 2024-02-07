var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
    let arraySuperheroes = [
        "Superman",
        "Mr Increibles",
        "Flash",
        "Homelander",
        "Viuda Negra"
    ];

  res.render('superheroes/index', { title: 'Superheroes', superheroes: arraySuperheroes });
});

module.exports = router;
