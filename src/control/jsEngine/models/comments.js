const mongoose = require('mongoose');
const Schema = mongoose.Schema;

//schema and model

const CommentSchema = new Schema({
    author:{
        type: String,
        require: [true, 'auth is required']
    },
    idAuthor:{
        type: Number,
        require: [true, 'idAuthor is not required']
    },
    idEsp:{
        type: Number,
        require: [true, 'idEsp is required']
    },
    idUS:{
        type: Number,
        require: [true, 'idEsp is required']
    },
    comment:{
        type: String,   
        require: [true, 'idUS is required']
    },
    date:{
        type: Date,   
        default: Date.now,
        require: [true, 'idUS is required']
    }
});

const Commentaries = mongoose.model('comments', CommentSchema);

module.exports = Commentaries;