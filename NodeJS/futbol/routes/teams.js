var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
    var teams = [
        "Deportivo Alaves", 
        "Almeria",
        "Athletic Club",
        "Atl. Madrid",
        "FC Barcelona",
        "Real Betis",
        "Cadiz",
        "Celta de Vigo",
        "Getafe",
        "Girona",
        "Granada",
        "Las Palmas",
        "Real Mallorca",
        "Osasuna",
        "Rayo Vallecano",
        "Real Madrid",
        "Real Sociedad",
        "Sevilla",
        "Valencia",
        "Villareal"
    ];
    res.render('teams', { title: 'Teams', teams: teams });
});

module.exports = router;
