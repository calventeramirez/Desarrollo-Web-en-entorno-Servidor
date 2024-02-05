var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
    var matches = [
        ["Valencia", 2, 1, "Almeria"],
        ["Granada", 1, 1, "Las Palmas"],
        ["Alaves", 1, 3, "Barcelona"],
        ["Girona", 0 , 0 , "Real Sociedad"],
        ["Villareal", 0, 0, "Cadiz"],
        ["Osasuna", 0, 3, "Celta"],
        ["Betis", 1, 1, "Getafe"],
        ["Real Madrid", 1, 1, "Atl. Madrid"]
    ];
    res.render('matches', { title: 'Matches', matches: matches });
});

module.exports = router;
