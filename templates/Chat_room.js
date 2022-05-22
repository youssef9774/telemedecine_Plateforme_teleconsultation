var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

/* la routage avec la page html */
app.get('/', function(req, res) {
  res.sendFile(__dirname + '/chat_room.html')
});
/* faire l'ecoute sur la connextion , lors de la premier connection ou l'actualisation de la page 
envoie le message coonected successfully */
io.on('connection',function(socket) {
  console.log('connected successfully ');
/* la deconnection, à la quitter de la page , envoie automatiquement sur le console
disconnected */
  socket.on('disconnect', function() {
    console.log('disconnected');
  });

  /*  transmetre le msg stocker dans la partie html sur le serveur
  transmetre la discussion entre les utilisateur */
  socket.on('chat message', (msg) => {
    io.emit('chat message', msg);
  });

  
/* envoyer le geter de l'utilisateur  */
  socket.on('username', (username) => {
    

    io.emit('username', username);
  });
});
/* connecter sur le port 3000 , avec l'url localhost:3000/ */
http.listen(3001, function() {
  console.log('listening on *:3001');
});
