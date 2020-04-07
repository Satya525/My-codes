const express = require("express");
const path = require("path");
const mongoose = require("mongoose");
const bodyParser = require("body-parser");
// mongoose.connect('mongodb://localhost:27017/nodek', { useNewUrlParser: true, useUnifiedTopology: true,});

mongoose.connect('mongodb://localhost/nodekb');
let db = mongoose.connection;

db.once('open', () => {
    console.log('Connected to Mongo DB');
})

db.on('error', (err) => {
    console.log(err);
})

const app = express();

let Article = require('./models/article');

app.set('views', path.join(__dirname, 'views'))
app.set('view engine', 'pug');

app.use(bodyParser.urlencoded({
    extended: false
}));

app.use(bodyParser.json());

app.use(express.static(path.join(__dirname, 'public')));

app.get("/", (req, res) => {
    Article.find({}, (err, articles) => {
        if (err) {
            console.log(err);
        } else {
            res.render("index", {
                title: 'Hello',
                articles: articles
            });
        }
    })
})

// app.get("/", (req, res) => {
//     let articles = [
//         {
//             id:1,
//             title:'Article One',
//             author:'Satya',
//             body:'This is article 1'
//         },
//         {
//             id:2,
//             title:'Article Two',
//             author:'Satya',
//             body:'This is article 1'
//         },
//         {
//             id:3,
//             title:'Article Three',
//             author:'Satya',
//             body:'This is article 1'
//         }
//     ];
//     res.render("index",{
//         title:'Hello',
//         articles: articles
//     });
// })
app.get('/article/:id', (req, res) => {
    Article.findById(req.params.id, (err, article) => {
        res.render('article', {
            article: article
        })
    });
})


app.get('/articles/add', (req, res) => {
    res.render('add_articles', {
        title: 'Add Articles'
    })
})

app.post('/articles/add', (req, res) => {
    let article = new Article();
    article.title = req.body.title;
    article.author = req.body.author;
    article.body = req.body.body;
    article.save((err) => {
        if (err) {
            console.log(err);
        } else {
            res.redirect('/')
        }
    })
});

app.get('/articles/edit/:id', (req, res) => {
    Article.findById(req.params.id, (err, article) => {
        res.render('edit_articles', {
            title: 'Edit Article',
            article: article
        })
    });
})

app.post('/articles/edit/:id', (req, res) => {
    let article = {};
    article.title = req.body.title;
    article.author = req.body.author;
    article.body = req.body.body;

    let query = {
        _id: req.params.id
    };

    Article.update(query, article, (err) => {
        if (err) {
            console.log(err);
        } else {
            res.redirect('/')
        }
    })
})

app.delete('/article/:id', (req, res) => {
    let query = {_id: req.params.id};

    Article.remove(query, (err) => {
        if(err) {
            console.log(err);
        }
        res.send('Success');
    })
})

app.listen(3000, () => {
    console.log("Server Started on port 3000...");
});