var express = require('express');
var router = express.Router();

//calling database file to connect to database
var db = require('../config/database');

//function to verify if the user is logged in
var isAuthenticated = (req,res,next)=>{
  if(!req.session.authenticated) res.redirect('/') 
  next()
}

//messages query
var messages;
  var location; 
  const data = [messages,location];
  db.query("SELECT * FROM messages ",(err,rows)=>{
    if (err) throw err;
    if (rows.length >0){
      messages = rows;
    }
    else {
      messages = null;
    }
  });

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});


/* GET home page. */
router.get('/dash', function(req, res, next) {
  res.render('dashboard', { title: 'Express' });
});

//route to check if user exists in database, if not go back to login page
router.post('/log', async function(req,res,next){
  //storing data entered by user into a variable
  var username = req.body.username;
  var password = req.body.password;
  const data = [username,password];

  //query to check the existence of a user
  let sql = await db.query("SELECT * FROM loginform WHERE username = ? and password = ?",data);
  if(sql.length > 0){
     const user = sql[0];

     //storing user details in a session to be used outside the route
     req.session.user = user;
     req.session.authenticated = true;
     res.redirect('dashboard');
  }else{
     res.locals.msg = "wrong credentials";
     res.redirect('index');
  }
  });

    //route to display dashboard page
router.get('/dashboard',isAuthenticated, async function(req, res, next) {
   var dt = await db.query("select * from messages order by id desc");
    res.render('dashboard',{
      user:req.session.user,
      messages:dt
    });
    
   //res.json(dt);
  
});


//route to logout and terminate a user session
router.get('/logout', function(req, res, next) {
  req.session.destroy(()=>{
       res.redirect('/')
  });
  
});


module.exports = router;
