var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
    var leagues = [
        "Liga EA SPORT", 
        "Premier League",
        "Bundesliga",
        "Ligue 1",
        "Serie A"
    ];
    res.render('leagues', { title: 'Leagues', leagues: leagues });
});

module.exports = router;
