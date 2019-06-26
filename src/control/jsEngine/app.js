const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
//const CMT = require('./models/comments');
const PACKS = require('./models/mongo_package');
const path = require('path');
const router = express.Router();

//set up express - like new in java
const app = express();

//connecting to mongo

mongoose.connect('mongodb://192.168.99.100:32768/rapid-io',{ useNewUrlParser: true });
mongoose.Promise = global.Promise;

//getting bodyparser
app.use(bodyParser.json());

app.get('/', function(req, res){
      res.send('welcome'); 
});

//get comments from especialidade
/*
app.get('/api/tracking', function(req, res, next){
    if (req.query.idEsp == null){
    
    CMT.find({}).then(function(comments){
    res.send(comments);  
    next();
    //console.log('busca sem ID algum ');
    }); 
    }
    
    if (req.query.idEsp != null){
    var a = parseInt(req.query.idEsp);
    CMT.find({idEsp: a}).limit(6).then(function(comments){    
    res.send(comments);  
    next();
    //console.log('buscando via ID da especialidade ' + a);
    });
    }   
    
});
*/

app.get('/api/tracking/whereis/:_id', function(req, res, next){
    let id = req.params._id;
    PACKS.find({_id: id}).then(function(packs){
    res.send(packs);  
    next();
    console.log('busca do pacote com o cod ' + id);
    }); 
});

app.get('/api/tracking/customer/:customerId', function(req, res, next){
    let costid = req.params.customerId;
    PACKS.find({customerId: costid}).then(function(packs){
    res.send(packs);  
    next();
    console.log('busca do pacote do cliente ' + costid);
    }); 
});

app.get('/api/warehouse/:warehouseId', function(req, res, next){
    let whid = req.params.warehouseId;
    PACKS.find({warehouseId: whid}).then(function(packs){
    res.send(packs);  
    next();
    console.log('busca do pacote do cliente ' + whid);
    }); 
});


//method to get a count of documents of a index (comments of a especiallity)
/*
app.get('/api/comments/count/:idEsp', function(req, res, next){
    var a = parseInt(req.params.idEsp);
    CMT.countDocuments({idEsp: a}).then(function(comments){
    res.setHeader('Content-Type', 'application/json');
    res.send(JSON.stringify(comments));
    next();
    //console.log('contagem dos comentarios da especialidade ' + a);
    });
});
*/

//end

//posting pack
app.post('/api/tracking/new', function(req, res){
    PACKS.create(req.body).then(function(packs){
    let id = req.body._id;
    //res.setHeader('Content-Type', 'application/json');
    //res.write(packs);
    res.send('Pacote ' + id + ' publicado.');
    console.log('Pacote ' + id + ' publicado.');
    //console.log('postei men');
    });
    /*
    console.log('\npostei mermao\n');
    console.log(req.body.author);
    console.log(req.body.idEsp);
    console.log(req.body.idUS);
    console.log(req.body.comment); 
    */
});

//updating pack
app.put('/api/tracking/update', function(req, res, next){
    let id = req.body._id;
    let lastUpdate = Date.now();
    PACKS.findOneAndUpdate(
        id,
        {$push: {
            location: [req.body.location]
        },
          $set:{
            statusId: req.body.statusId,
            lastUpdate: lastUpdate,
            warehouseId: req.body.warehouseId
                }
          }
    ).then(function(packs){
    packs.statusId = req.body.statusId;
    packs.save();
    //res.save2;
    res.send('pacote ' + id + ' atualizado');
    next();
    console.log('pacote ' + id + ' atualizado');
    //console.log(req.body.statusId + ' update do pacote ' + id);
    }); 
});

//deleting pack
app.delete('/api/pack/delete/:_id', function (req, res){
    PACKS.deleteOne({ _id: req.params._id }).then(function(packs){
    res.send('sucess delete');
    
    //console.log(req.params.id);
      });
    });

//listen request
app.listen(8080);
console.log ('Listening at 8080');
