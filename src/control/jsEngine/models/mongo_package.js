const mongoose = require('mongoose');
const Schema = mongoose.Schema;

//schema and model

const PacksSchema = new Schema({
    _id:{
        type: String,
        required: [true, 'code is required']
    },
    statusId:{
        type: Number,   
        required: [true, 'status id is required']
    },
    customerId:{
        type: Number,   
        required: [true, 'Customer id is required']
    },
    lastUpdate:{
        type: Date,   
        default: Date.now,
        required: [true, 'last update is required']
    },
    postDate:{
        type: Date,   
        default: Date.now,
        required: [true, 'post date is required']
    },
    location:{
        type: Array,
        default: [],
        required: [true, 'location is required']
    },
    warehouseId:{
        type: Number,   
        required: [true, 'warehouse id is required']
    },
});

const Packs = mongoose.model('packs', PacksSchema);

module.exports = Packs;